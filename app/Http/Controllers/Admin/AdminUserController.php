<?php

namespace App\Http\Controllers\Admin;

use App\Enums\DistrictType;
use App\Enums\RealEstateType;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Order;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        // $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.pages.users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function getUsersForAjax()
    {
        if(currentUser()->hasRole('მენეჯერი')){
            $users = User::query()->latest();
        }else{
            $users = User::query()->latest();
        }
        return Datatables()->of($users)
            ->addIndexColumn()
            ->addColumn('formatted_tel', function ($data) {
                $html = $data->tel;
                $html .= '<a href="https://wa.me/'.$data->tel.'" target="_blank"> Whatsapp </a> <br /> <a href="viber://chat?number='.$data->tel.'" target="_blank"> Viber </a> <br /> <a href="https://t.me/+'.$data->tel.'" target="_blank"> Telegram </a>';
                return $html;
            })
            ->addColumn('city_title', function ($data) {
                $html = '';
                if ($data->city_id && $data->city){
                    $html = $data->city->city_ka;
                }
                return $html;
            })
            ->addColumn('role', function ($data) {
                $html = '';
                foreach ($data->getRoleNames() as $v) {
                    $html .= "<span class='badge rounded-pill bg-success'>$v</span>";
                }
                return $html;
            })
            ->addColumn('action', function ($data) {
                $btn = '';
                if($data->user_type == 2 && $data->is_verified == 0){
                    $btn .= ' <a class="btn btn-success shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="userVerification(' . $data->id . ')"><i class="fa fa-check"></i></a>';
                }
//                $btn = '<a class="btn btn-primary shadow btn-xs sharp mr-1 btn-blnc" href="javascript:void(0)" onclick="balanceAction('.$data->id.')" data-status="balance-plus"><i class="fa fa-plus"></i></a>';
                $btn .= ' <a class="btn btn-primary shadow btn-xs sharp mr-1" target="_blank" href="' . route("admin.users.impersonate",$data->id) . '"><i class="fas fa-exchange-alt" aria-hidden="true"></i></a>';
                $btn .= ' <a class="btn btn-primary shadow btn-xs sharp mr-1" href="' . route("admin.users.edit",$data->id) . '"><i class="fa fa-edit"></i></a>';

                
//                if (currentUser()->can('user-delete')) {
                    $btn .= ' <a class="btn btn-danger shadow btn-xs sharp mr-1" href="javascript:void(0)" onclick="deleteUser(' . $data->id . ')"><i class="fa fa-trash"></i></a>';
//                }
                return $btn;
            })
            ->rawColumns(['city_title', 'action','role','formatted_tel'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $roles = Role::where('name','!=','System Administrator')->pluck('name', 'name')->all();

        return view('admin.pages.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'tel' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['user_type'] = 2;
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->to(route('admin.users.index'))
            ->with('success', 'მომხმარებელი წარმატებით დარეგისტრირდა');
    }

    public function customerBalances(){
        return view('admin.pages.users.customer_balances');
    }

    public function renderDisableUser(Request $request)
    {
        $id = $request->id;
        $user = User::findOrFail($id);
        $orders = [];
        $users = [];
        if($user->hasRole('User')){
            $orders = Order::where('user_id',$id)->get();
        }
        if($user->hasRole('Influence')){
            $users = User::where('parent_user_id',$id)->get();
        }


        return jsonResponse(['status' => 0,'html' => view('admin.general.users.relation_data',compact('users','orders','id'))->render()]);
    }

    public function customerBalancesAjax()
    {
        return Datatables()->of(CustomerBalance::query()->with('user','create_user')->latest())
            ->addIndexColumn()
            ->rawColumns(['role', 'action'])
            ->make(true);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('pages.users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::where('name','!=','System Administrator')->pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('admin.pages.users.edit', compact('user', 'roles', 'userRole'));
    }

    public function getUserById($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'tel' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
//        return $input;
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->to(route('admin.users.index'))
            ->with('success', 'მომხმარებლის ინფორმაცია წარმატებით შეიცვალა');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

    public function activateUser(Request $request)
    {
        // return $request->all();
        try {
            $user = User::findOrFail($request->id);
            $user->update(['is_verified' => 1]);
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception) {
            return jsonResponse(['status' => 0,'err' => $exception->getMessage()]);
        }
    }

    public function deleteUser(Request $request)
    {
        try {
            User::findOrFail($request->id)->delete();
            return jsonResponse(['status' => 1]);
        } catch (\Exception $exception) {
            return jsonResponse(['status' => 0]);
        }
    }
}

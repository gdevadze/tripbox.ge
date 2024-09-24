@if ($paginator->hasPages())





<nav class=" pb-md-4 pt-4 mt-2" aria-label="Pagination">

<ul class="pagination mb-1">



    @if ($paginator->onFirstPage())

        
        <li class="page-item disabled"><a class="page-link" href="javascript:0;" aria-label="Next"><i class="fa-solid fa-arrow-left"></i></a></li>
    @else
    <li class="page-item "><a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Next"><i class="fa-solid fa-arrow-left"></i></a></li>
  

    @endif

    @foreach ($elements as $element)

        @if (is_string($element))

            <li class="disabled"><span>{{ $element }}</span></li>

        @endif

        @if (is_array($element))

            @foreach ($element as $page => $url)

                @if ($page == $paginator->currentPage())


                <li class="page-item active  d-sm-block" aria-current="page"><span class="page-link">{{ $page }}<span class="visually-hidden">(current)</span></span></li>


                   

                @else


                <li class="page-item  d-sm-block"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>


         

                @endif

            @endforeach

        @endif

    @endforeach

    @if ($paginator->hasMorePages())


    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></a></li>


  

    @else
    <li class="page-item disabled"><a class="page-link" href="javascript:0;" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></a></li>
   
    
    @endif

</ul>


</nav>


@endif 
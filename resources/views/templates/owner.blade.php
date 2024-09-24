@extends('user.layouts.app')

@section('content')
    <main>


        @include('user.general.header')



        <div class="page-content">

        @include('user.particials.user-header')


            <div class="page-content-wrapper p-xxl-4">


            <style>

.bg-of-boxes {
    background: #DAF7F97D;
border: 0;
}
.bg-of-boxes h5 {
    color: #2A2E49;
    margin-bottom: 10px ;
font-weight: bold;
}
</style>


<div class="row g-4 mb-5 mt-4">



<div class="col">
<div class="card card-body   bg-of-boxes" >
    

        <div>
        <h5 class="h6">Total  - Cars</h5>
        <div class="d-flex justify-content-between">

        
            <h4 class="mb-0">215</h4>

            <div class="float-md-right">

           
            <svg  width="45" height="38" viewBox="0 0 45 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.80371 30.8985H37.7584" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.6732 30.8985V34.7609C10.6732 35.823 9.80265 36.692 8.73858 36.692H4.86924C3.80517 36.692 2.93457 35.823 2.93457 34.7609V21.5904C2.93457 20.0841 3.28281 18.6164 3.95994 17.2646L8.54511 8.13018C9.86069 5.5038 12.5305 3.86232 15.4712 3.86232H29.13C32.0707 3.86232 34.7405 5.52312 36.0561 8.13018L40.6413 17.2646C41.3184 18.5971 41.6666 20.0841 41.6666 21.5904V34.7609C41.6666 35.823 40.796 36.692 39.732 36.692H35.8626C34.7986 36.692 33.928 35.823 33.928 34.7609V30.8985" fill="#2A2E49"/>
                <path d="M10.6732 30.8985V34.7609C10.6732 35.823 9.80265 36.692 8.73858 36.692H4.86924C3.80517 36.692 2.93457 35.823 2.93457 34.7609V21.5904C2.93457 20.0841 3.28281 18.6164 3.95994 17.2646L8.54512 8.13018C9.86069 5.5038 12.5305 3.86232 15.4712 3.86232H29.13C32.0707 3.86232 34.7405 5.52312 36.0561 8.13018L40.6413 17.2646C41.3184 18.5971 41.6666 20.0841 41.6666 21.5904V34.7609C41.6666 35.823 40.796 36.692 39.732 36.692H35.8626C34.7986 36.692 33.928 35.823 33.928 34.7609V30.8985" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M43.5627 15.4686H38.7261C38.7261 15.4686 31.9547 17.3804 22.2814 17.3804C12.608 17.3804 5.83667 15.4686 5.83667 15.4686H1" fill="#2A2E49"/>
                <path d="M43.5627 15.4686H38.7261C38.7261 15.4686 31.9547 17.3804 22.2814 17.3804C12.608 17.3804 5.83667 15.4686 5.83667 15.4686H1" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M35.8245 21.2427C35.8245 22.3049 34.9539 23.1739 33.8898 23.1739H30.0205" fill="#2A2E49"/>
                <path d="M35.8245 21.2427C35.8245 22.3049 34.9539 23.1739 33.8898 23.1739H30.0205" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.73828 21.2427C8.73828 22.3049 9.60888 23.1739 10.673 23.1739H14.5423" fill="#2A2E49"/>
                <path d="M8.73828 21.2427C8.73828 22.3049 9.60888 23.1739 10.673 23.1739H14.5423" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.4121 27.0362H26.1508" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>

            </div>


            
        </div>


    
</div>
</div>

<div class="col">
<div class="card card-body   bg-of-boxes" style="background: #F0F7F1;" >
    

        <div>
        <h5 class="h6">Total  - გაქირავებული</h5>
        <div class="d-flex justify-content-between">

        
            <h4 class="mb-0">215</h4>

            <div class="float-md-right">

           
                <svg width="35" height="41" viewBox="0 0 35 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.887 35.7321H13.4439C10.0444 35.7321 3.62305 34.0135 3.62305 27.4977C3.62305 20.982 10.0444 19.2633 13.4439 19.2633H21.8294C22.1127 19.2633 28.8173 19.1689 28.8173 13.8618C28.8173 8.55481 22.1127 8.46038 21.8294 8.46038H12.3863C12.0106 8.46038 11.6503 8.31114 11.3847 8.0455C11.119 7.77986 10.9698 7.41958 10.9698 7.04391C10.9698 6.66824 11.119 6.30795 11.3847 6.04232C11.6503 5.77668 12.0106 5.62744 12.3863 5.62744H21.8294C25.2289 5.62744 31.6502 7.34609 31.6502 13.8618C31.6502 20.3776 25.2289 22.0962 21.8294 22.0962H13.4439C13.1606 22.0962 6.45598 22.1907 6.45598 27.4977C6.45598 32.8047 13.1606 32.8992 13.4439 32.8992H22.887C23.2627 32.8992 23.623 33.0484 23.8886 33.314C24.1542 33.5797 24.3035 33.94 24.3035 34.3156C24.3035 34.6913 24.1542 35.0516 23.8886 35.3172C23.623 35.5829 23.2627 35.7321 22.887 35.7321Z" fill="#2A2E49"/>
                    <path d="M7.13582 13.6543C6.26031 13.6468 5.39485 13.467 4.58884 13.1251C3.78283 12.7832 3.05205 12.2859 2.43824 11.6615C1.82443 11.0372 1.3396 10.2981 1.01143 9.48637C0.683266 8.67467 0.518191 7.80627 0.525631 6.93077C0.533072 6.05527 0.712883 5.1898 1.0548 4.38379C1.39671 3.57778 1.89403 2.84701 2.51837 2.23319C3.1427 1.61938 3.88182 1.13455 4.69353 0.806385C5.50524 0.478218 6.37363 0.313143 7.24913 0.320584C9.01729 0.335611 10.7071 1.05242 11.9467 2.31332C13.1864 3.57422 13.8743 5.27593 13.8593 7.04409C13.8443 8.81224 13.1275 10.502 11.8666 11.7417C10.6057 12.9813 8.90397 13.6693 7.13582 13.6543ZM7.13582 3.15352C6.13403 3.15352 5.17327 3.55148 4.4649 4.25985C3.75653 4.96822 3.35857 5.92898 3.35857 6.93077C3.35857 7.93256 3.75653 8.89332 4.4649 9.60169C5.17327 10.3101 6.13403 10.708 7.13582 10.708C8.13761 10.708 9.09836 10.3101 9.80673 9.60169C10.5151 8.89332 10.9131 7.93256 10.9131 6.93077C10.9131 5.92898 10.5151 4.96822 9.80673 4.25985C9.09836 3.55148 8.13761 3.15352 7.13582 3.15352ZM28.1373 40.926C27.2618 40.9285 26.3944 40.7585 25.5846 40.4258C24.7748 40.093 24.0384 39.604 23.4176 38.9867C22.7968 38.3694 22.3036 37.6358 21.9663 36.8279C21.629 36.02 21.4541 35.1535 21.4516 34.278C21.4491 33.4025 21.6191 32.5351 21.9518 31.7253C22.2846 30.9155 22.7736 30.1792 23.3909 29.5583C24.0082 28.9375 24.7418 28.4444 25.5497 28.107C26.3576 27.7697 27.224 27.5948 28.0995 27.5923C29.8677 27.5873 31.5654 28.2849 32.8192 29.5316C34.0731 30.7784 34.7803 32.4721 34.7853 34.2403C34.7903 36.0084 34.0927 37.7062 32.846 38.96C31.5992 40.2138 29.9055 40.921 28.1373 40.926ZM28.1373 30.4253C27.1355 30.4253 26.1748 30.8232 25.4664 31.5316C24.758 32.24 24.3601 33.2007 24.3601 34.2025C24.3601 35.2043 24.758 36.1651 25.4664 36.8734C26.1748 37.5818 27.1355 37.9798 28.1373 37.9798C29.1391 37.9798 30.0999 37.5818 30.8082 36.8734C31.5166 36.1651 31.9146 35.2043 31.9146 34.2025C31.9146 33.2007 31.5166 32.24 30.8082 31.5316C30.0999 30.8232 29.1391 30.4253 28.1373 30.4253Z" fill="#2A2E49"/>
                    </svg>
                    
            </div>

            </div>


            
        </div>


    
</div>
</div>


<div class="col">
<div class="card card-body   bg-of-boxes" style="background: #F0F7F1;">
    

        <div>
        <h5 class="h6">Total  - არააქტიური</h5>
        <div class="d-flex justify-content-between">

        
            <h4 class="mb-0">215</h4>

            <div class="float-md-right">

           
                <svg width="35" height="41" viewBox="0 0 35 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.887 35.7321H13.4439C10.0444 35.7321 3.62305 34.0135 3.62305 27.4977C3.62305 20.982 10.0444 19.2633 13.4439 19.2633H21.8294C22.1127 19.2633 28.8173 19.1689 28.8173 13.8618C28.8173 8.55481 22.1127 8.46038 21.8294 8.46038H12.3863C12.0106 8.46038 11.6503 8.31114 11.3847 8.0455C11.119 7.77986 10.9698 7.41958 10.9698 7.04391C10.9698 6.66824 11.119 6.30795 11.3847 6.04232C11.6503 5.77668 12.0106 5.62744 12.3863 5.62744H21.8294C25.2289 5.62744 31.6502 7.34609 31.6502 13.8618C31.6502 20.3776 25.2289 22.0962 21.8294 22.0962H13.4439C13.1606 22.0962 6.45598 22.1907 6.45598 27.4977C6.45598 32.8047 13.1606 32.8992 13.4439 32.8992H22.887C23.2627 32.8992 23.623 33.0484 23.8886 33.314C24.1542 33.5797 24.3035 33.94 24.3035 34.3156C24.3035 34.6913 24.1542 35.0516 23.8886 35.3172C23.623 35.5829 23.2627 35.7321 22.887 35.7321Z" fill="#2A2E49"/>
                    <path d="M7.13582 13.6543C6.26031 13.6468 5.39485 13.467 4.58884 13.1251C3.78283 12.7832 3.05205 12.2859 2.43824 11.6615C1.82443 11.0372 1.3396 10.2981 1.01143 9.48637C0.683266 8.67467 0.518191 7.80627 0.525631 6.93077C0.533072 6.05527 0.712883 5.1898 1.0548 4.38379C1.39671 3.57778 1.89403 2.84701 2.51837 2.23319C3.1427 1.61938 3.88182 1.13455 4.69353 0.806385C5.50524 0.478218 6.37363 0.313143 7.24913 0.320584C9.01729 0.335611 10.7071 1.05242 11.9467 2.31332C13.1864 3.57422 13.8743 5.27593 13.8593 7.04409C13.8443 8.81224 13.1275 10.502 11.8666 11.7417C10.6057 12.9813 8.90397 13.6693 7.13582 13.6543ZM7.13582 3.15352C6.13403 3.15352 5.17327 3.55148 4.4649 4.25985C3.75653 4.96822 3.35857 5.92898 3.35857 6.93077C3.35857 7.93256 3.75653 8.89332 4.4649 9.60169C5.17327 10.3101 6.13403 10.708 7.13582 10.708C8.13761 10.708 9.09836 10.3101 9.80673 9.60169C10.5151 8.89332 10.9131 7.93256 10.9131 6.93077C10.9131 5.92898 10.5151 4.96822 9.80673 4.25985C9.09836 3.55148 8.13761 3.15352 7.13582 3.15352ZM28.1373 40.926C27.2618 40.9285 26.3944 40.7585 25.5846 40.4258C24.7748 40.093 24.0384 39.604 23.4176 38.9867C22.7968 38.3694 22.3036 37.6358 21.9663 36.8279C21.629 36.02 21.4541 35.1535 21.4516 34.278C21.4491 33.4025 21.6191 32.5351 21.9518 31.7253C22.2846 30.9155 22.7736 30.1792 23.3909 29.5583C24.0082 28.9375 24.7418 28.4444 25.5497 28.107C26.3576 27.7697 27.224 27.5948 28.0995 27.5923C29.8677 27.5873 31.5654 28.2849 32.8192 29.5316C34.0731 30.7784 34.7803 32.4721 34.7853 34.2403C34.7903 36.0084 34.0927 37.7062 32.846 38.96C31.5992 40.2138 29.9055 40.921 28.1373 40.926ZM28.1373 30.4253C27.1355 30.4253 26.1748 30.8232 25.4664 31.5316C24.758 32.24 24.3601 33.2007 24.3601 34.2025C24.3601 35.2043 24.758 36.1651 25.4664 36.8734C26.1748 37.5818 27.1355 37.9798 28.1373 37.9798C29.1391 37.9798 30.0999 37.5818 30.8082 36.8734C31.5166 36.1651 31.9146 35.2043 31.9146 34.2025C31.9146 33.2007 31.5166 32.24 30.8082 31.5316C30.0999 30.8232 29.1391 30.4253 28.1373 30.4253Z" fill="#2A2E49"/>
                    </svg>
                    
            </div>

            </div>


            
        </div>


    
</div>
</div>

<div class="col">
<div class="card card-body   bg-of-boxes" style="background: #F0F7F1;">
    

        <div>
        <h5 class="h6">Total  - გასაქირავებელი</h5>
        <div class="d-flex justify-content-between">

        
            <h4 class="mb-0">215</h4>

            <div class="float-md-right">

           
                <svg width="35" height="41" viewBox="0 0 35 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.887 35.7321H13.4439C10.0444 35.7321 3.62305 34.0135 3.62305 27.4977C3.62305 20.982 10.0444 19.2633 13.4439 19.2633H21.8294C22.1127 19.2633 28.8173 19.1689 28.8173 13.8618C28.8173 8.55481 22.1127 8.46038 21.8294 8.46038H12.3863C12.0106 8.46038 11.6503 8.31114 11.3847 8.0455C11.119 7.77986 10.9698 7.41958 10.9698 7.04391C10.9698 6.66824 11.119 6.30795 11.3847 6.04232C11.6503 5.77668 12.0106 5.62744 12.3863 5.62744H21.8294C25.2289 5.62744 31.6502 7.34609 31.6502 13.8618C31.6502 20.3776 25.2289 22.0962 21.8294 22.0962H13.4439C13.1606 22.0962 6.45598 22.1907 6.45598 27.4977C6.45598 32.8047 13.1606 32.8992 13.4439 32.8992H22.887C23.2627 32.8992 23.623 33.0484 23.8886 33.314C24.1542 33.5797 24.3035 33.94 24.3035 34.3156C24.3035 34.6913 24.1542 35.0516 23.8886 35.3172C23.623 35.5829 23.2627 35.7321 22.887 35.7321Z" fill="#2A2E49"/>
                    <path d="M7.13582 13.6543C6.26031 13.6468 5.39485 13.467 4.58884 13.1251C3.78283 12.7832 3.05205 12.2859 2.43824 11.6615C1.82443 11.0372 1.3396 10.2981 1.01143 9.48637C0.683266 8.67467 0.518191 7.80627 0.525631 6.93077C0.533072 6.05527 0.712883 5.1898 1.0548 4.38379C1.39671 3.57778 1.89403 2.84701 2.51837 2.23319C3.1427 1.61938 3.88182 1.13455 4.69353 0.806385C5.50524 0.478218 6.37363 0.313143 7.24913 0.320584C9.01729 0.335611 10.7071 1.05242 11.9467 2.31332C13.1864 3.57422 13.8743 5.27593 13.8593 7.04409C13.8443 8.81224 13.1275 10.502 11.8666 11.7417C10.6057 12.9813 8.90397 13.6693 7.13582 13.6543ZM7.13582 3.15352C6.13403 3.15352 5.17327 3.55148 4.4649 4.25985C3.75653 4.96822 3.35857 5.92898 3.35857 6.93077C3.35857 7.93256 3.75653 8.89332 4.4649 9.60169C5.17327 10.3101 6.13403 10.708 7.13582 10.708C8.13761 10.708 9.09836 10.3101 9.80673 9.60169C10.5151 8.89332 10.9131 7.93256 10.9131 6.93077C10.9131 5.92898 10.5151 4.96822 9.80673 4.25985C9.09836 3.55148 8.13761 3.15352 7.13582 3.15352ZM28.1373 40.926C27.2618 40.9285 26.3944 40.7585 25.5846 40.4258C24.7748 40.093 24.0384 39.604 23.4176 38.9867C22.7968 38.3694 22.3036 37.6358 21.9663 36.8279C21.629 36.02 21.4541 35.1535 21.4516 34.278C21.4491 33.4025 21.6191 32.5351 21.9518 31.7253C22.2846 30.9155 22.7736 30.1792 23.3909 29.5583C24.0082 28.9375 24.7418 28.4444 25.5497 28.107C26.3576 27.7697 27.224 27.5948 28.0995 27.5923C29.8677 27.5873 31.5654 28.2849 32.8192 29.5316C34.0731 30.7784 34.7803 32.4721 34.7853 34.2403C34.7903 36.0084 34.0927 37.7062 32.846 38.96C31.5992 40.2138 29.9055 40.921 28.1373 40.926ZM28.1373 30.4253C27.1355 30.4253 26.1748 30.8232 25.4664 31.5316C24.758 32.24 24.3601 33.2007 24.3601 34.2025C24.3601 35.2043 24.758 36.1651 25.4664 36.8734C26.1748 37.5818 27.1355 37.9798 28.1373 37.9798C29.1391 37.9798 30.0999 37.5818 30.8082 36.8734C31.5166 36.1651 31.9146 35.2043 31.9146 34.2025C31.9146 33.2007 31.5166 32.24 30.8082 31.5316C30.0999 30.8232 29.1391 30.4253 28.1373 30.4253Z" fill="#2A2E49"/>
                    </svg>
                    
            </div>

            </div>


         
        </div>


    
</div>
</div>

<div class="col">
<div class="card card-body   bg-of-boxes" style="background: #F0F7F1;">
    

        <div>
        <h5 class="h6">Total  - შემოსავალი</h5>
        <div class="d-flex justify-content-between">

        
            <h4 class="mb-0">24000$</h4>

            <div class="float-md-right">
                <svg width="35" height="41" viewBox="0 0 35 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.887 35.7321H13.4439C10.0444 35.7321 3.62305 34.0135 3.62305 27.4977C3.62305 20.982 10.0444 19.2633 13.4439 19.2633H21.8294C22.1127 19.2633 28.8173 19.1689 28.8173 13.8618C28.8173 8.55481 22.1127 8.46038 21.8294 8.46038H12.3863C12.0106 8.46038 11.6503 8.31114 11.3847 8.0455C11.119 7.77986 10.9698 7.41958 10.9698 7.04391C10.9698 6.66824 11.119 6.30795 11.3847 6.04232C11.6503 5.77668 12.0106 5.62744 12.3863 5.62744H21.8294C25.2289 5.62744 31.6502 7.34609 31.6502 13.8618C31.6502 20.3776 25.2289 22.0962 21.8294 22.0962H13.4439C13.1606 22.0962 6.45598 22.1907 6.45598 27.4977C6.45598 32.8047 13.1606 32.8992 13.4439 32.8992H22.887C23.2627 32.8992 23.623 33.0484 23.8886 33.314C24.1542 33.5797 24.3035 33.94 24.3035 34.3156C24.3035 34.6913 24.1542 35.0516 23.8886 35.3172C23.623 35.5829 23.2627 35.7321 22.887 35.7321Z" fill="#2A2E49"/>
                    <path d="M7.13582 13.6543C6.26031 13.6468 5.39485 13.467 4.58884 13.1251C3.78283 12.7832 3.05205 12.2859 2.43824 11.6615C1.82443 11.0372 1.3396 10.2981 1.01143 9.48637C0.683266 8.67467 0.518191 7.80627 0.525631 6.93077C0.533072 6.05527 0.712883 5.1898 1.0548 4.38379C1.39671 3.57778 1.89403 2.84701 2.51837 2.23319C3.1427 1.61938 3.88182 1.13455 4.69353 0.806385C5.50524 0.478218 6.37363 0.313143 7.24913 0.320584C9.01729 0.335611 10.7071 1.05242 11.9467 2.31332C13.1864 3.57422 13.8743 5.27593 13.8593 7.04409C13.8443 8.81224 13.1275 10.502 11.8666 11.7417C10.6057 12.9813 8.90397 13.6693 7.13582 13.6543ZM7.13582 3.15352C6.13403 3.15352 5.17327 3.55148 4.4649 4.25985C3.75653 4.96822 3.35857 5.92898 3.35857 6.93077C3.35857 7.93256 3.75653 8.89332 4.4649 9.60169C5.17327 10.3101 6.13403 10.708 7.13582 10.708C8.13761 10.708 9.09836 10.3101 9.80673 9.60169C10.5151 8.89332 10.9131 7.93256 10.9131 6.93077C10.9131 5.92898 10.5151 4.96822 9.80673 4.25985C9.09836 3.55148 8.13761 3.15352 7.13582 3.15352ZM28.1373 40.926C27.2618 40.9285 26.3944 40.7585 25.5846 40.4258C24.7748 40.093 24.0384 39.604 23.4176 38.9867C22.7968 38.3694 22.3036 37.6358 21.9663 36.8279C21.629 36.02 21.4541 35.1535 21.4516 34.278C21.4491 33.4025 21.6191 32.5351 21.9518 31.7253C22.2846 30.9155 22.7736 30.1792 23.3909 29.5583C24.0082 28.9375 24.7418 28.4444 25.5497 28.107C26.3576 27.7697 27.224 27.5948 28.0995 27.5923C29.8677 27.5873 31.5654 28.2849 32.8192 29.5316C34.0731 30.7784 34.7803 32.4721 34.7853 34.2403C34.7903 36.0084 34.0927 37.7062 32.846 38.96C31.5992 40.2138 29.9055 40.921 28.1373 40.926ZM28.1373 30.4253C27.1355 30.4253 26.1748 30.8232 25.4664 31.5316C24.758 32.24 24.3601 33.2007 24.3601 34.2025C24.3601 35.2043 24.758 36.1651 25.4664 36.8734C26.1748 37.5818 27.1355 37.9798 28.1373 37.9798C29.1391 37.9798 30.0999 37.5818 30.8082 36.8734C31.5166 36.1651 31.9146 35.2043 31.9146 34.2025C31.9146 33.2007 31.5166 32.24 30.8082 31.5316C30.0999 30.8232 29.1391 30.4253 28.1373 30.4253Z" fill="#2A2E49"/>
                    </svg>
                    
           
            
            </div>

            </div>


            
        </div>


    
</div>
</div>



</div>




<div class="row g-4 mb-5 " style="    border-top: 1px solid #CEC9C9;">


<div class="col-md-3" style="   border-right: 1px solid #CEC9C9; margin-top: 0px; padding-top: 20px;">

    <div class="">

        <img src="https://tripbox.phpweb.ge/assets/images/svg/search-icon.svg" style="position: absolute; margin-top: 12px;">
        <input class="form-control" placeholder="Искать" style="padding-left:25px;border: 0; border-bottom: 2px solid #898B9E; border-radius: 0px;">
    
</div>


<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>

<div class="d-flex mb-3 mt-3"  style="border: 1px solid #B9ACAC; padding: 15px; border-radius: 15px;">
    <div>
        <img style="width: 85px;margin-right: 10px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
    </div>
    <div style="padding-top: 20px;">
        <h5>Giorgi lazi</h5>
        <p>მანქანა - 12 </p>
    </div>
</div>




</div>

<div class="col-md-9">


    
<style>

.table tr {
padding-left:15px!important;padding-right:15px!important;
}
.tabl-icons a{
margin-right: 15px;
}
</style>


<table class="table  " style="border-radius: 10px;padding-left:15px;padding-right:15px;padding-bottom:20px;">
<thead>
<tr>
<th scope="col">ფოტო</th>
<th scope="col">ბრენდი</th>
<th scope="col">მოდელი</th>
<th scope="col">წელი</th>
<th scope="col">სტატუსი</th>

<th scope="col">ქმედება</th>
</tr>
</thead>
<tbody>
              
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
<span style="    font-weight: bold;
    color: #78bc60;
  ">
აქტიური
</span>
</td>

<td>
<a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>

<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>
<tr >

<td><img src="https://tripbox.phpweb.ge/storage/images/cars/car-17-TuzoF//property-image-Gq5E3EQpLs-1716534649.jpg" style="height:50px;" alt="Card image 17"> 

</td>
<td>Toyota


</td>
<td>BMW 525
<br />
<span style="    font-weight: bold;
color: #78bc60;
font-size: 11px;">
GW777GG
</span>


</td>

<td>2024

</td>

<td>
  <span style="    font-weight: bold;
      color: #78bc60;
    ">
  აქტიური
  </span>
</td>

<td>
  <a href="#" class="btn btn-primary mb-0" style="font-size: 10px;">დეტალები</a>
</td>

</tr>


</tbody>
</table>



</div>




</div>








<!-- .... -->







            </div>

        </div>


    </main>
@endsection

@push('js')


<div class="modal fade" id="orderss" tabindex="-1" aria-labelledby="orderssLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl ">
        <div class="modal-content" style="    padding: 20px;">

            <div class="modal-body" style=" padding: 0px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="    position: absolute;
						right: 0;
						margin-right: 60px;
						margin-top: 20px;z-index: 10000;"></button>
               


                <div class="">
                 

<!-- ---->

<div class="card-header border-bottom p-4" style="    margin-bottom: 20px;">
							<h1 class="mb-0 fs-3" style="font-size: 25px!important;margin-bottom: 20px;">ჩემი ჯავშანი #1</h1>
						</div>




<div class="row">

<div class="col">

<div class="card shadow rounded-2"  style="    padding: 20px;">



<p>სულ თანხა</p>
<h5>2424$</h5>

</div>
</div>
<div class="col">
<div class="card shadow rounded-2" style="    padding: 20px;">
<p>გასავლელი მანძილი</p>
<h5>150 კმ</h5>
</div>
</div>
<div class="col">
<div class="card shadow rounded-2"  style="    padding: 20px;">
<p>ხანგძლივობა</p>
<h5>4 დღე</h5>
</div>
</div>
<div class="col">
<div class="card shadow rounded-2"  style="    padding: 20px;">
<p>გზად ნახავთ</p>
<h5>5 ქალაქს</h5>
</div>
</div>


</div>


<div class="row">
<div class="col-md-8">


<!-- car -->
<div class="card  shadow p-4" style="margin-top: 30px;">
						
						<div class="card-body p-0">
							<div class="row g-4 align-items-center">
							
								<div class="col-md-4">
									<div class="bg-light rounded-3 px-4 py-5">
										<img src="/assets/images/car-inside.png" alt="">
									</div>
								</div>

								
								<div class="col-md-8">
							
									<div class="d-sm-flex justify-content-sm-between">
									
										<div>
											<h4 class="card-title mb-2">CHEVROLET Captiva</h4>
											<ul class="nav nav-divider h6 fw-normal mb-2">
												<li class="nav-item">ჯიპი</li>
												<li class="nav-item">ავტ</li>
												<li class="nav-item">4 ადგლი</li>
											</ul>
										</div>
									
										<ul class="list-inline mb-0">
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item me-0"><i class="fa-solid fa-star text-warning"></i></li>
											<li class="list-inline-item"><i class="fa-solid fa-star-half-alt text-warning"></i></li>
										</ul>
									</div>

								
									<ul class="list-group list-group-borderless mt-2 mb-0">
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>600Kms included. After that $15/Kms</span>
										</li>
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>4X4 </span>
										</li>
										<li class="list-group-item d-flex pb-0 mb-0">
											<span class="h6 fw-normal mb-0"><i class="bi bi-check-circle me-2"></i>ბენზინი</span>
										</li>
									</ul>
								</div>
							</div>
						</div>	
					

						<div class="card-footer p-0 pt-4">
							<div class="hstack gap-3 flex-wrap">
							
								<h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									ულიმიტო გარბენი
								</h6>
			
						
								<h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									მიწოდება 45 წუთში
								</h6>
                                <h6 class="bg-success bg-opacity-10 text-success fw-light rounded-2 d-inline-block mb-0 py-2 px-4">
									ხანგძლივობა 4 დღე
								</h6>
							</div>
						</div>




                        <!-- -->
                        <div class="row g-4" style="margin-top:20px;">

								<div class="col-lg-6">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">გასვლა</h6>
										<h5 class="mb-1">2024/02/12</h5>
										<small><i class="bi bi-alarm me-1"></i>12:30 </small>
									</div>
								</div>

							
								<div class="col-lg-6">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">დატოვება</h6>
										<h5 class="mb-1">2024/02/12</h5>
										<small><i class="bi bi-alarm me-1"></i>4:30</small>
									</div>
								</div>

					
								<!-- <div class="col-lg-4">
									<div class="bg-light py-3 px-4 rounded-3">
										<h6 class="fw-light small mb-1">Rooms &amp; Guests</h6>
										<h5 class="mb-1">2 G - 1 R</h5>
										<small><i class="bi bi-brightness-high me-1"></i>3 Nights - 4 Days</small>
									</div>
								</div> -->
							</div>

                        <!-- .... -->


                        <div class="row" style="margin-top:30px;">
					
					<div class="col-md-6">
						<div class="d-flex">

						<style>

							.car-user-page{
								padding: 60px 10px;
border-radius: 20px;
								box-shadow: 2px 2px 10px 0px #00000026;

							}
							.pickupes {
								margin-right: 15px;
								width: 15%;
							}
							.pickupes h4 {
								font-size: 15px;
							}
							.pickupes p {
								font-size: 13px;
							}
							.search-inputes {
								width: 100%;
								margin-right: 15px;
							}
							.search-inputes input {
								margin-bottom: 20px;
								border-radius: 20px;border: 1px solid #D1D1D1
							}
							.search-pickups-infos {
								width: 25%;
								text-align: center;
							}
						</style>
						
						<div class="search-inputes">
                            <p>მიწოდების მისამართი: ბათუმი მისამართი</p>
                            <p>დატოვების მისამართი: ბათუმი მისამართი</p>
							
						</div>
					
					</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex">
							<div>
								<img style="width: 85px;margin-right: 30px;" src="https://tripbox.phpweb.ge/assets/images/no-photo-avatar.png">
							</div>
							<div style="padding-top: 0px;">
                            <p style="margin-bottom:0px;">ინფორმაცია კლიენტზე</p>
								<h5>სახელი გვარი </h5>
								<p style="margin-bottom: 0px;color:#444;"><a href="" style="color:#444;"> +995 555 55 55 55</a></p>
                                <p><a href="" style="color:#444;">info@mail.ge</a></p>
							</div>
						</div>
					</div>
				</div>


                <!-- -->
					</div>


<!-- ... cars -->

</div>
<div class="col-md-4">

<div class="card shadow rounded-2" style="    margin-top: 27px;    margin-bottom: 20px;">
					
							<div class="card-header border-bottom">
								<h5 class="card-title mb-0">ფინანსური ინფორმაცია</h5>
							</div>
	
						
							<div class="card-body">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ავტომობილი 15 დღით</span>
										<span class="fs-5">424$</span>
									</li>
									
									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">მიწოდება / ბათუმი - თბილისი</span>
										<span class="fs-5">$20</span>
									</li>

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ფასდაკლება<span class="badge text-bg-danger smaller mb-0 ms-2">10% </span></span>
										<span class="fs-5 text-success">-$2,560</span>	
									</li>


									<li class="list-group-item d-flex justify-content-between align-items-center">
										<span class="h6 fw-light mb-0">ეხლა გადასახდელი</span>
										<span class="fs-5">$350</span>
									</li>
								</ul>
							</div>
	
							<div class="card-footer border-top">
								<div class="d-flex justify-content-between align-items-center">
									<span class="h5 mb-0">სულ თანხა</span>
									<span class="h5 mb-0">$22,500</span>
								</div>
							</div>
						</div>


                        <a href="" class="btn btn-sm btn-primary mb-0" style="    background-color: #d6293d;border:0;">უარყოფა</a>
                        <a href="" class="btn btn-sm btn-primary mb-0" style="    background-color: #78BC61;border:0;">დათანხმება</a>
                    

</div>        
</div>        

                  
                    <!-- ... serach bar -->
                </div>








            </div>

        </div>
    </div>
</div>

@endpush
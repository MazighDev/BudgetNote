<div class="header">
    <span data-title="BUDGETNOTE" class="texte">BUDGETNOTE </span>


    <div class="profile">
        <img src="{{asset('Images/profile.jpg')}}" alt="profileImage" class="image">
        <div class="profileText">
            @if (Auth::check())
            <p class="textee maintext">{{Auth::user()->lname}} {{Auth::user()->fname}}</p>
            @endif
        </div>
    </div>
</div>
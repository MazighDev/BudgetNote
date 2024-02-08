<div class="close slider">

    <div class="links">
        <div class="search">
            <i class="fa-solid fa-magnifying-glass icons"></i><input type="search" placeholder="Search"
                class="searchbtn">
        </div>


        <hr>
        <div class="coins childs">
            <i class="fa-solid fa-house"></i><a href="/index">
                <p class="text" id="005">Mon Tableau De Bord</p>
            </a>
        </div>

 

        <div class="coins childs">
            <i class="fa-solid fa-piggy-bank"></i><a href="/revenu">
                <p class="text" id="003">Revenue</p>
            </a>
        </div>
        <div class="coins childs">
            <i class="fa-solid fa-coins"></i>
            <a href="/depense">
                <p class="text" id="005">Dépenses</p>
            </a>
        </div>
        <div class="coins childs">
            <i class="fa-solid fa-wallet"></i>
            <a href="/budget">
                <p class="text" id="004">Budget</p>
            </a>
        </div>

        <hr>
        <div class="settings childs">
            <i class="fa-solid fa-gear"></i>
            <p class="text" id="006">Paramètres</p>

        </div>
        <div class="logout childs">
            <i class="fa-solid fa-right-from-bracket icons"></i>
            <form method="POST" action="/logout" id="navv">
                @csrf
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="text" id="logoutbtn">Se déconnecter</button>
            </form>
        </div>



        <div class="toggle">
            <input type="checkbox" class="checkbox">
            <p class="text" id="toggleText">Dark Mode</p>
        </div>

    </div>
</div>
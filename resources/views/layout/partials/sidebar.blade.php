web<div class="sidebar">
    <div class="sidebar-menu">
        <ul>
        @can("assistant")
        <li class="item">
            <a href="#" class="menu-btn">
                <i class="fas fa-user-circle"></i><span>Mes informations</span>
            </a>
        </li>
        @endcan
        @can("abonne")
        <li class="item">
            <a href="{{route('emprunt.mesEmprunts')}}" class="menu-btn">
                <i class="fas fa-clipboard"></i><span>Mes emprunts</span>
            </a>
        </li>
        @endcan
        @can("assistant")
            <li class="item" id="abonne">
            <a href="#abonne" class="menu-btn">
                <i class="fas fa-book-reader"></i><span>Abonnes <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
            <div class="sub-menu">
                <a href="{{route('abonne.create')}}"><i class="fas fa-plus-square"></i><span>Ajouter</span></a>
                <a href="{{route('abonne.index')}}"><i class="fas fa-tasks"></i><span>Gestion abonnes</span></a>
            </div>
            </li>
        @endcan
        
        @can("assistant")
        <li class="item" id="emprunt">
            <a href="#emprunt" class="menu-btn">
                <i class="fas fa-clipboard"></i><span>Emprunts <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
            <div class="sub-menu"> 
                <a href="{{route('emprunt.get')}}"><i class="fas fa-plus-square"></i><span>Ajouter</span></a>
                 <!-- <a href="#"><i class="fas fa-clipboard-check"></i><span>Retours</span></a>
                <a href="#"><i class="far fa-calendar-times"></i><span>Retards</span></a> -->
                <a href="{{route('emprunt.gestion')}}"><i class="fas fa-tasks"></i><span>Gestion Emprunts</span></a>
            </div>
        </li>
        @endcan

        @can("admin")
        <li class="item" id="assistant">
            <a href="#assistant" class="menu-btn">
                <i class="fas fa-briefcase"></i><span>Assistants <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
            <div class="sub-menu">
                <a href="{{route('assistant.create')}}"><i class="fas fa-plus-square"></i><span>Ajouter</span></a>
                <a href="{{route('assistant.index')}}"><i class="fas fa-tasks"></i><span>Gestion Assistants</span></a>
            </div>
        </li>
        @endcan

        @can("assistant")
        <li class="item" id="doc">
            <a href="#doc" class="menu-btn">
                <i class="fas fa-book"></i><span>Documents <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
            <div class="sub-menu">
                <a href="{{route('livre.create')}}"><i class="fas fa-plus-square"></i><span>Ajouter</span></a>
                <a href=""><i class="fas fa-edit"></i><span>Etat Document</span></a>
                <a href="{{route('doc.gestion')}}"><i class="fas fa-tasks"></i><span>Gestion Documents</span></a>
            </div>
        </li>
        @endcan

    </ul>
    </div>
</div>
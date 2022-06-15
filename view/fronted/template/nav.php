
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light  collapse">
      <div class="position-sticky pt-3">

        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
              <span data-feather="monitor"></span>
              Tableaux de bord
            </a>
          </li>

          <li class="nav-item">

            <a class="nav-link" href="#" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">
              <span data-feather="plus-circle"></span>
              Plus
            </a>

              <ul class="list-unstyled ps-3 collapse" id="contents-collapse">

                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php?action=suivi">
                  <span data-feather="user-check"></span>
                  Suivi des modifications
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php?action=profil">
                  <span data-feather="key"></span>
                  Profil du compte
                  </a>
                </li>

              </ul>
          </li>

        </ul>



        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Effectifs</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>

        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allTeachers">
              <span data-feather="users"></span>
              Enseignants
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allAssigns">
              <span data-feather="sliders"></span>
              Affectations de support
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allSupport">
              <span data-feather="credit-card"></span>
              Supports de poste
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=gpec">
              <span data-feather="grid"></span>
              GPEC
            </a>
          </li>

        </ul>




        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Autres</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>

        <ul class="nav flex-column mb-2">

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allEventsSpe&typeEvent=Revision_effectifs">
              <span data-feather="shuffle"></span>
              Révision des effectifs
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allEventsSpe&typeEvent=Absence_departs">
              <span data-feather="flag"></span>
              Absences/Départs
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allEventsSpe&typeEvent=Primes_hr">
              <span data-feather="gift"></span>
              Primes/Heures référentielles
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allEventsSpe&typeEvent=Avancements">
              <span data-feather="award"></span>
              Avancements
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allEventsSpe&typeEvent=Taches">
              <span data-feather="check-circle"></span>
              Tâches
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=allEvents">
              <span data-feather="sunset"></span>
              Evénements
            </a>
          </li>


        </ul>

  
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Connexions</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>

        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=importView">
              <span data-feather="upload"></span>
              Imports
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=NomChuView">
              <span data-feather="database"></span>
              Liste personnel médical CHU
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php?action=IdMangueView">
              <span data-feather="database"></span>
              Base mangue
            </a>
          </li>


        </ul>



      </div>
    </nav>

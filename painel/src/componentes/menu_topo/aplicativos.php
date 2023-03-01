<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/credcarbon/painel/lib/includes.php");
?>
<style>
    .appIcons{
        background-color:#fff;
        border:solid 1px #fff;
        cursor:pointer;
    }
    .appIcons:hover{
        background-color:#eee;
        border:solid 1px #ccc;
        cursor:pointer;
    }
</style>

<ul class="navbar-nav">
    <li class="nav-item dropdown">
        <a
            class="nav-link d-flex align-items-center justify-content-center"
            href="#" id="navbarScrollingDropdown2"
            role="button"
            data-bs-toggle="dropdown"
            ria-expanded="false"
            style="
                    background-color:#eee;
                    border-radius:100%;
                    width:40px;
                    height:40px;
                    font-weight:bold;
                    "
        >
            <i class="fa-brands fa-buromobelexperte" style="font-size:25px;"></i>
        </a>
        <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="navbarScrollingDropdown2">
            <li class="MenuLogin">
                <div class="row">

                    <div class="col-4">
                        <div class="card w-100 d-flex align-items-center justify-content-center appIcons" >
                            <h3><i class="fa-solid fa-envelope-open-text"></i></h3>
                            <span class="fs-6">E-mail</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card w-100 d-flex align-items-center justify-content-center appIcons" >
                            <h3><i class="fa-solid fa-calendar-days"></i></h3>
                            <span class="fs-6">Agenda</span>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card w-100 d-flex align-items-center justify-content-center appIcons" >
                            <h3><i class="fa-solid fa-house"></i></h3>
                            <span class="fs-6">Site</span>
                        </div>
                    </div>

                </div>
            </li>
        </ul>
    </li>
</ul>
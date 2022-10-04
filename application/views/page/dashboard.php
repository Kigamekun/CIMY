<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>K - APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <style>
        /* Webpixels CSS */
        /* Utility and component-centric Design System based on Bootstrap for fast, responsive UI development */
        /* URL: https://github.com/webpixels/css */

        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);

        /* Bootstrap Icons */
        @import url("https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css");
    </style>
	 <style>
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }

		.table-responsive {
			padding:20px;
		}
    </style>
</head>

<body>

    <!-- Banner -->
    <!-- <a href="https://webpixels.io/components?ref=codepen"
        class="btn w-full btn-primary text-truncate rounded-0 py-2 border-0 position-relative" style="z-index: 1000;">
        <strong>Crafted with Webpixels CSS:</strong> The design system for Bootstrap 5. Browse all components →
    </a> -->

    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg"
            id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                    <img src="https://preview.webpixels.io/web/img/logos/clever-primary.svg" alt="...">
                </a>
                <!-- User menu (mobile) -->
                <div class="navbar-user d-lg-none">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle -->
                        <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <div class="avatar-parent-child">
                                <img alt="Image Placeholder"
                                    src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                    class="avatar avatar- rounded-circle">
                                <span class="avatar-child avatar-badge bg-success"></span>
                            </div>
                        </a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Billing</a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                </div>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bar-chart"></i> Analitycs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-chat"></i> Messages
                                <span
                                    class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bookmarks"></i> Collections
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-people"></i> Users
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20">
                    <!-- Navigation -->
                    
                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <!-- User (md) -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-square"></i> Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a type="submit" class="nav-link" href="<?php echo base_url(); ?>/logout">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">Application</h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">
                                    <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-pencil"></i>
                                        </span>
                                        <span>Edit</span>
                                    </a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#petugasModal"
                                        class="btn d-inline-flex btn-sm btn-primary mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-plus"></i>
                                        </span>
                                        <span>Create Petugas</span>
                                    </button>

                                    <button type="button" data-bs-toggle="modal" data-bs-target="#siswaModal"
                                        class="btn d-inline-flex btn-sm btn-primary mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-plus"></i>
                                        </span>
                                        <span>Create Siswa</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Nav -->
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">
                            <li class="nav-item ">
                                <a href="#" class="nav-link active">All files</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link font-regular">Shared</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link font-regular">File requests</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span
                                                class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                                            <span class="h3 font-bold mb-0">$750.90</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                                <i class="bi bi-credit-card"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>13%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">New
                                                projects</span>
                                            <span class="h3 font-bold mb-0">215</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                                <i class="bi bi-people"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>30%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total
                                                hours</span>
                                            <span class="h3 font-bold mb-0">1.400</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                                <i class="bi bi-clock-history"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                            <i class="bi bi-arrow-down me-1"></i>-5%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work
                                                load</span>
                                            <span class="h3 font-bold mb-0">95%</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                                <i class="bi bi-minecart-loaded"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="badge badge-pill bg-soft-success text-success me-2">
                                            <i class="bi bi-arrow-up me-1"></i>10%
                                        </span>
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   




                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Siswa</h5>
							<div class="d-flex justify-content-end">
        
		<a href="<?php echo base_url(); ?>printPdfSiswa" target="_blank" 
			class="btn d-inline-flex btn-sm btn-primary mx-1">
			<span class=" pe-2">
				<i class="bi bi-plus"></i>
			</span>
			<span>Print</span>
			</a>
	</div>
                        </div>
                        <div class="table-responsive">
                            <table id="siswaTable" class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>

                                        <th scope="col">NISN</th>
                                        <th scope="col">NIS</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No Telphone</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($siswa as $item) { ?>
                                    <tr>
                                        <td>

                                            <?= $item->nisn ?>

                                        </td>
                                        <td>

                                            <?= $item->nis ?>

                                        </td>

                                        <td>

                                            <?= $item->nama ?>

                                        </td>

                                        <td>

                                            <?= $item->id_kelas ?>

                                        </td>

                                        <td>
                                            <?= $item->alamat ?>

                                        </td>

                                        <td>
                                            <?= $item->no_telp ?>
                                        </td>

                                        <td class="text-end">
                                            <button type="button"
                                                data-url="<?php echo base_url(); ?>updateSiswa/<?= $item->id ?>"
                                                data-nama="<?= $item->nama ?>" data-alamat="<?= $item->alamat ?>" data-no_telp="<?= $item->no_telp ?>"   data-bs-toggle="modal"
                                                data-bs-target="#updateSiswaModal"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                U
                                            </button>
                                            <a href="<?php echo base_url(); ?>deleteSiswa/<?= $item->id ?>" onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>





                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Petugas</h5>
							<div class="d-flex justify-content-end">
        
								<a href="<?php echo base_url(); ?>printPdfPetugas" target="_blank" 
                                    class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Print</span>
									</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="petugasTable" class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>

                                        <th scope="col">Nama</th>

                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($petugas as $item) { ?>
                                    <tr>
                                        <td>

                                            <?= $item->nama_petugas ?>

                                        </td>



                                        <td class="text-end">
                                            <button type="button"
                                                data-url="<?php echo base_url(); ?>updatePetugas/<?= $item->id ?>"
                                                data-nama="<?= $item->nama_petugas ?>" data-bs-toggle="modal"
                                                data-bs-target="#updatePetugasModal"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                U
                                            </button>
                                            <a href="<?php echo base_url(); ?>updatePetugas/<?= $item->id ?>" onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>








                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Jurusan</h5>
                            <div class="d-flex justify-content-end">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#jurusanModal"
                                    class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </button>
								<a href="<?php echo base_url(); ?>printPdfJurusan" target="_blank" 
                                    class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Print</span>
									</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="jurusanTable" class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jurusan as $item) { ?>
                                    <tr>
                                        <td>
                                            <a class="text-heading font-semibold" href="<?php echo base_url(); ?>kelas/<?= $item->id ?>">
                                                <?= $item->nama ?>
                                            </a>
                                        </td>
                                        <td class="text-end">
                                            <button type="button"
                                                data-url="<?php echo base_url(); ?>updateJurusan/<?= $item->id ?>"
                                                data-nama="<?= $item->nama ?>" data-bs-toggle="modal"
                                                data-bs-target="#updateJurusanModal"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                U
                                            </button>
                                            <a href="<?php echo base_url(); ?>deleteJurusan/<?= $item->id ?>" onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>





                    <div class="card shadow border-0 mb-7">
                        <div class="card-header">
                            <h5 class="mb-0">Spp</h5>
                            <div class="d-flex justify-content-end">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#sppModal"
                                    class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </button>
								<a href="<?php echo base_url(); ?>printPdfSpp" target="_blank" 
                                    class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Print</span>
									</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="sppTable" class="table table-hover table-nowrap">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No SPP</th>
                                        <th scope="col">Tahun</th>
                                        <th scope="col">Nominal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($spp as $item) { ?>
                                    <tr>
                                        <td>

										<a class="text-heading font-semibold" href="<?php echo base_url(); ?>pembayaran/<?= $item->id ?>">
                                            <?= $item->no_spp ?>
											</a>
                                        </td>
                                        <td>
                                            <?= $item->tahun ?>
                                        </td>
                                        <td>
                                            <?= $item->nominal ?>
                                        </td>
                                        <td class="text-end">
                                            <button type="button"
                                                data-url="<?php echo base_url(); ?>updateSpp/<?= $item->id ?>"
                                                data-no_spp="<?= $item->no_spp ?>" data-tahun="<?= $item->tahun ?>"
                                                data-nominal="<?= $item->nominal ?>" data-bs-toggle="modal"
                                                data-bs-target="#updateSppModal"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                U
                                            </button>
                                            <a href="<?php echo base_url(); ?>deleteSpp/<?= $item->id ?>" onclick="return confirm('Are you sure you want to delete this item?');"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>









                </div>
            </main>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pegawai Create</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url(); ?>/create" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NIP</label>
                            <input type="number" name="nip" class="form-control" id="exampleFormControlInput1"
                                placeholder="123456">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control"
                                id="exampleFormControlInput1">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <div class="modal fade" id="siswaModal" tabindex="-1" aria-labelledby="siswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="siswaModalLabel">Siswa Create</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url(); ?>/registerSiswa" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                                placeholder="username">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="nama">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NISN</label>
                            <input type="text" name="nisn" class="form-control" id="exampleFormControlInput1"
                                placeholder="nisn">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NIS</label>
                            <input type="text" name="nis" class="form-control" id="exampleFormControlInput1"
                                placeholder="nis">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1"
                                placeholder="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">No Telphone</label>
                            <input type="text" name="no_telp" class="form-control" id="exampleFormControlInput1"
                                placeholder="no telphone">
                        </div>


						<div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                            <select name="id_kelas" id="" class="form-select">
								<option value="">Select Kelas</option>
							<?php foreach($kelas as $kls){ ?>

<option value="<?= $kls->id ?>"><?= $kls->nama ?></option>

<?php } ?>
							</select>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control"
                                id="exampleFormControlInput1">
                        </div>
						<div class="mb-3">
							<input type="file" name="thumb" id="" class="dropify">
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="modal fade" id="petugasModal" tabindex="-1" aria-labelledby="petugasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="petugasModalLabel">Pegawai Create</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url(); ?>/registerPegawai" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control"
                                id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Role</label>
                            <select name="level" id="" class="form-select">
                                <option value=""></option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>

						<div class="mb-3">
							<input type="file" name="thumb" id="" class="dropify">
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <div class="modal fade" id="jurusanModal" tabindex="-1" aria-labelledby="jurusanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jurusanModalLabel">Jurusan Create</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url(); ?>/createJurusan" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@ym">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






    <div class="modal fade" id="sppModal" tabindex="-1" aria-labelledby="sppModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sppModalLabel">Jurusan SPP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo base_url(); ?>createSpp" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NO SPP</label>
                            <input type="text" name="no_spp" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@ym">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                            <input type="date" name="tahun" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@ym">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nominal</label>
                            <input type="number" name="nominal" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@ym">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>












    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content">

            </div>
        </div>
    </div>







    <div class="modal fade" id="updatePetugasModal" tabindex="-1" aria-labelledby="updatePetugasModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-petugas">

            </div>
        </div>
    </div>



    <div class="modal fade" id="updateSiswaModal" tabindex="-1" aria-labelledby="updateSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-siswa">

            </div>
        </div>
    </div>

    <div class="modal fade" id="updateJurusanModal" tabindex="-1" aria-labelledby="updateJurusanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-jurusan">

            </div>
        </div>
    </div>





    <div class="modal fade" id="updateSppModal" tabindex="-1" aria-labelledby="updateSppModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-spp">

            </div>
        </div>
    </div>



    <?php if ($this->session->flashdata('message')) { ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            position: 'center',
            icon: <?php echo json_encode($this->session->flashdata('status')); ?>,
            title: <?php echo json_encode($this->session->flashdata('status')); ?>,
            html: <?php echo json_encode($this->session->flashdata('message')); ?>,
            showConfirmButton: false,
            timer: 4000
        })
    </script>
    <?php } ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

		<script>
			$(document).ready(function () {
    $('#siswaTable').DataTable();
});
		</script>

<script>
			$(document).ready(function () {
    $('#petugasTable').DataTable();
});
		</script>

<script>
			$(document).ready(function () {
    $('#jurusanTable').DataTable();
});
		</script>

<script>
			$(document).ready(function () {
    $('#sppTable').DataTable();
});
		</script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>

    <script>
        $('#updateModal').on('shown.bs.modal', function(e) {
            var html = `
    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="${$(e.relatedTarget).data('url')}" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" name="nama" value="${$(e.relatedTarget).data('nama')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
`;

            $('#modal-jurusan').html(html);


        });
    </script>



<script>
        $('#updatePetugasModal').on('shown.bs.modal', function(e) {
            var html = `
    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Petugas Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="${$(e.relatedTarget).data('url')}" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" value="${$(e.relatedTarget).data('nama')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
`;

            $('#modal-petugas').html(html);


        });
    </script>




<script>
        $('#updateSiswaModal').on('shown.bs.modal', function(e) {
            var html = `
    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="${$(e.relatedTarget).data('url')}" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input type="text" name="nama" value="${$(e.relatedTarget).data('nama')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>

						<div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="${$(e.relatedTarget).data('alamat')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
						<div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telphone</label>
                            <input type="text" name="no_telp" value="${$(e.relatedTarget).data('no_telp')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
`;

            $('#modal-siswa').html(html);


        });
    </script>




<script>
        $('#updateJurusanModal').on('shown.bs.modal', function(e) {
            var html = `
    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Jurusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="${$(e.relatedTarget).data('url')}" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" name="nama" value="${$(e.relatedTarget).data('nama')}" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
`;

            $('#modal-jurusan').html(html);


        });
    </script>






<script>
        $('#updateSppModal').on('shown.bs.modal', function(e) {
            var html = `
    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Spp Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="${$(e.relatedTarget).data('url')}" method="post">
                    <div class="modal-body">
					<div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">NO SPP</label>
                            <input type="text" name="no_spp" class="form-control" value="${$(e.relatedTarget).data('no_spp')}" id="exampleFormControlInput1"
                                placeholder="name@ym">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                            <input type="date" name="tahun" class="form-control" value="${$(e.relatedTarget).data('tahun')}" id="exampleFormControlInput1"
                                placeholder="name@ym">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nominal</label>
                            <input type="number" name="nominal" class="form-control" value="${$(e.relatedTarget).data('nominal')}" id="exampleFormControlInput1"
                                placeholder="name@ym">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
`;

            $('#modal-spp').html(html);


        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmatri+ | Médicaments</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/4.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar (identique aux autres pages) -->
        <nav id="sidebar">
            <!-- ... Votre sidebar existante ... -->
           <div class="sidebar-header">
                <img src="assets/image/logo.png" alt="Pharmatri+ Logo" class="logo">
                <h3>Pharmatri+</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="1.html"><i class="fas fa-home"></i> <span class="menu-text">Dashboard</span></a>
                </li>
                <li>
                    <a href="3.html"><i class="fas fa-shopping-cart"></i> <span class="menu-text">Commandes</span></a>
                </li>
                <li>
                    <a href="4.html"><i class="fas fa-capsules"></i> <span class="menu-text">Medicament</span></a>
                </li>
                <li>
                    <a href="2.html"><i class="fas fa-users"></i> <span class="menu-text">Utilisation</span></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-chart-bar"></i> <span class="menu-text">Statistiques</span></a>
                </li>
                <li>
                    <a href="5.html"><i class="fas fa-cog"></i> <span class="menu-text">Paramètres</span></a>
                </li>
            </ul>
        </nav>

        <!-- Page Content -->
        <div id="content">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button aria-label="Ouvrir le menu" type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <div class="search-bar">
                        <form class="d-flex">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Rechercher..."
                                    aria-label="Search">
                                <button aria-label="Rechercher" class=" btn btn-outline-secondary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="user-profile ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="assets/image/Marshadow.jpg" alt="User" class="avatar">
                                <span class="user-name">Admin</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Paramètres</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-sign-out-alt me-2"></i>Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Médicaments</h1>
                    <button class="btn btn-primary btn-sm add-medicament-btn">
                        <i class="fas fa-plus me-1"></i> Ajouter un médicament
                    </button>
                </div>

                <!-- Liste des Médicaments -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Liste des médicaments</h6>
                        <div class="dropdown">
                            <button aria-label="Ouvrir le menu" class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item export-excel" href="#"><i class="fas fa-file-excel me-2"></i>Exporter en Excel</a></li>
                                <li><a class="dropdown-item export-pdf" href="#"><i class="fas fa-file-pdf me-2"></i>Exporter en PDF</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="medicamentsTable" class="table table-striped table-bordered" style="width:100%">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Désignation</th>
                                        <th>Description</th>
                                        <th>Prix (FCFA)</th>
                                        <th>Date d'ajout</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Les données seront chargées dynamiquement -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ajout/Modification -->
    <div class="modal fade" id="medicamentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalTitle">Ajouter un médicament</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="medicamentForm">
                    <div class="modal-body">
                        <div class="alert-container"></div>
                        
                        <div class="mb-3">
                            <label for="designation" class="form-label fw-bold">Désignation <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="designation" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="prix" class="form-label fw-bold">Prix Unitaire (FCFA) <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="prix" required>
                                    <span class="input-group-text">FCFA</span>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="date" class="form-label fw-bold">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary" id="saveBtn">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="confirmMessage">
                    Êtes-vous sûr de vouloir supprimer ce médicament ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirmDelete">Supprimer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/4.js"></script>
</body>
</html>
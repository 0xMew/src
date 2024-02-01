<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Home"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-color">
            <div class="container-fluid">
        
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="mx-auto col-md-8">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ex1.php">ex1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ex2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ex3.php">ex3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ex4</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ex5</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
</head>


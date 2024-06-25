<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Pest Classification</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="index.php">
        <img src="images\\logo.png" alt="Crop Pest Classification Logo" height="50" class="navbar-logo">
        <div class="brand-text">
            Crop Pest<br>Classification
        </div>
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto"> <!-- Use mx-auto to center -->
            <li class="nav-item active">
                <a class="nav-link" href="#">Classify <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
        </ul>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>


    <div class="container mt-5">
        <h1 class="text-center">Classify Crop Pests</h1>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form id="uploadForm" >
                    <div class="form-group">
                        <label for="pestImage" style="color: green;">Upload an image of a crop pest:</label>
                        <input type="file" class="form-control-file" id="pestImage" accept="image/*" required>
                    </div>
                    <button type="submit" value ="upload" class="btn btn-primary btn-block">Submit</button>
                </form>
                <div id="result" class="mt-4"></div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h2>Pests</h2>
                <div class="sample-images">
                    <img src="images\\sample1.jpg" alt="Sample Pest 1">
                    <img src="images\\sample2.jpg" alt="Sample Pest 2">
                    <img src="images\\sample3.jpg" alt="Sample Pest 3">
                </div>
                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

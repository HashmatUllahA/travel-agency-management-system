<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo e(url('frontend/assets/css/style.css')); ?>" rel="stylesheet">
    <title>apply </title>
    
</head>
<body>
    <div class="container mt-5">
        <!-- Header Section -->
        <div class="d-flex align-items-center  mb-4">
            <img src="<?php echo e(url('frontend/wp-content/uploads/sites/5/2018/03/logo-white.png')); ?>" alt="Logo" width="150">
            <div>
                <h3 class="text-center text-primary">PAK FUTURE INTERNATIONAL AGENCY</h3>
                <p class="text-center text-secondary">Providing visa services like manpower recruitment, immigration, and education.</p>
            </div>
        </div>

        <!-- Form Section -->
        <form action="applay-visa" method="post" class="bg-light p-4 rounded shadow">
            <?php echo csrf_field(); ?>
            <h4 class="text-center text-primary mb-4">Apply for Visa</h4>
            
            <!-- Row 1 -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="col-md-6">
                    <label for="fname" class="form-label">Father Name</label>
                    <input type="text" id="fname" name="fname" class="form-control" placeholder="Father Name" required>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="" selected>Choose Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="cnicno" class="form-label">Self/CNIC No:</label>
                    <input type="text" id="cnicno" name="cnicno" class="form-control" placeholder="14101-3654789-5" required>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dob" class="form-label">D.O.B (dd/MM/yyyy):</label>
                    <input type="text" id="dob" name="dob" class="form-control" placeholder="01/05/2020" required>
                </div>
                <div class="col-md-6">
                    <label for="placebarth" class="form-label">Place of Birth:</label>
                    <input type="text" id="placebarth" name="placebarth" class="form-control" placeholder="City Name" required>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="passportno" class="form-label">Passport Number:</label>
                    <input type="text" id="passportno" name="passportno" class="form-control" placeholder="Passport No" required>
                </div>
                <div class="col-md-6">
                    <label for="contactNubmer" class="form-label">contact Number:</label>
                    <input type="text" id="expriypassport" name="contactNubmer" class="form-control" placeholder="Expire Passport Date" required>
                </div>
                
            </div>

            <!-- Row 5 -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="visatitle" class="form-label">Title Of Visa:</label>
                    <input type="text" id="visatitle" name="visatitle" class="form-control" placeholder="Enter Visa Title" required>
                </div>
                <div class="col-md-6">
                    <label for="Experience" class="form-label">Experience:</label>
                    <input type="text" id="Experience" name="Experience" class="form-control" placeholder="Enter Experience" required>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-50">Submit</button>
            </div>
        </form>

        <!-- Helpline Section -->
        <div class="mt-5">
            <h3 class="text-center text-info">Helpline</h3>
            <p class="text-center text-secondary">Tel: +92 51 4571389 | 0514571384</p>
            <p class="text-center text-secondary">Cell: 03009300117 | 03219300117 | 03369300117</p>
            <p class="text-center text-secondary">Email: <a href="mailto:info@pakfutureint.com" class="text-decoration-none">info@pakfutureint.com</a></p>
        </div>
    </div>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</body>

</html><?php /**PATH J:\pfi\resources\views/USER/userapplayvisa.blade.php ENDPATH**/ ?>
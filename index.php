<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
 <div class="container mt-5">
    <div class>

    <?php
        if($_SERVER ['REQUESTED_METHOD'])== 'POST'{
            $fullname = $_POST['fullname'];
            $totalDays = $_POST['total_days'];
            $rate = $_POST['rate'];
            $advance = $_POST['advance'];

            $grosspay = $rate * $totalDays;

            $tax = $grosspay * 0.02;
            $sss = $grosspay * 0.015;
            $pagIbig = 50;

            $totalDeduc = $tax + $sss + $advance + $pagIbig;

            $netPay = $grosspay = $totalDeduc;
            {
           else    
            }


        }  


        


<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Student Registration</h4>
        </div>
        <div class="card-body">
            <form action="process_registration.php" method="POST">
                <!-- Full Name -->
                <div class="mb-3">
                    <label for="full name" class="form-label">Full Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your full name" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>

                <!-- Address -->
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" id="address" class="form-control" rows="2" placeholder="Enter your address" required></textarea>
                </div>

                <!-- Birthdate -->
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input type="number" name="birthdate" id="birthdate" class="form-control" required>
                </div>

                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">generate payslip</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
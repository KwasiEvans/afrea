<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <div class="title">National Association</div>
        <div class="content">
            <form action="../config/nationaldb.php" method="POST">
                <div class="user-details">
                    <div class="input_title_box">
                        <span class="details">Title</span>
                        <input type="text" placeholder="Enter your title" required name="title">
                    </div>
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="What is your first name?" required name="fName">
                    </div>
                    <div class="input-box">
                        <span class="details">Middle Name</span>
                        <input type="text" placeholder="What is your middle name?" name="mName">
                    </div>
                    <div class=" input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="What is your Last name?" required name="lName">
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="What is your email?" required name="email">
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Email</span>
                        <input type="text" placeholder="Confirm your email" required name="confEmail">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter your number" required name="phNum">
                    </div>
                    <div class="input-box">
                        <span class="details">Country</span>
                        <input type="text" placeholder="Where are you from?" required name="country">
                    </div>
                    <div class="input-box">
                        <span class="details">Country Zip-Code</span>
                        <input type="text" placeholder="Enter your Country Zip Code" name="zipCode">
                    </div>
                    <div class="input-box">
                        <span class="details">Membership Duration</span>
                        <input type="text" placeholder="What your membership duration" name="mDura">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="register" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
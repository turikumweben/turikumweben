<html>
<head>
    <meta charset="utf-8">
    <title>Post Form</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        form {
            width: 100%;
            max-width: 400px;
            background-color: lavender;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            text-shadow: 2px 2px 5px pink;
            margin-bottom: 20px;
        }

        fieldset {
            border: none;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .gender-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .gender-group label {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media (max-width: 480px) {
            form {
                padding: 15px;
            }

            h2 {
                font-size: 18px;
            }

            input[type="text"],
            input[type="date"],
            input[type="number"],
            input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <form method="POST" action="insert.php">
        <h2>Post Registration</h2>
        <fieldset>
            <label for="nid">National ID</label>
            <input type="text" id="nid" name="nid" value="">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" value="">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" value="">

            <div class="gender-group">
                <label>Gender:</label>
                <label><input type="radio" name="gender" value="male"> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
            </div>

            <label for="date">Date of Birth</label>
            <input type="date" id="date" name="date" value="">

            <label for="examd">Exam Date</label>
            <input type="date" id="examd" name="examd" value="">

            <label for="nbr">Phone Number</label>
            <input type="number" id="nbr" name="nbr" placeholder="+2507" value="">

            <label for="mark">Marks</label>
            <input type="number" id="mark" name="mark" value="">

            <input type="submit" name="save" value="Send">
            <input type="submit" name="clear" value="Clear">
        </fieldset>
    </form>
</body>
</html>
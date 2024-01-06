<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Stroke Prediction</title>
</head>

<body class="pt-8">
    <!-- simple_form.php -->

    <form action="process_form.php" method="post">
        Gender: <input type="text" name="gender"><br>
        <p style="color:red">* Male = 0, Female = 1, Other = 2</p><br>
        Age: <input type="text" name="age"><br>
        Hypertension: <input type="text" name="hypertension"><br>
        <p style="color:red">* No = 0, Yes = 1</p><br>
        Heart Disease: <input type="text" name="heart_disease"><br>
        Ever Married: <input type="text" name="ever_married"><br>
        Work Type: <input type="text" name="work_type"><br>
        Residence Type: <input type="text" name="Residence_type"><br>
        Average Glucose Level: <input type="text" name="avg_glucose_level"><br>
        BMI: <input type="text" name="bmi"><br>
        Smoking Status: <input type="text" name="smoking_status"><br>
        <!-- Add other fields as necessary -->

        <input type="submit" value="Submit">
    </form>

</body>

</html>
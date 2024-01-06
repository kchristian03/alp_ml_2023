<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <title>Stroke Prediction</title>
</head>

<body class="pt-8">
    <div class="max-w-md mx-auto bg-indigo-200 p-8 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6">Stroke Prediction</h1>

        <form action="../controller/request_form.php" method="post">
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-600">Gender:</label>
                <select id="gender" name="gender" class="mt-1 p-2 w-full border rounded-md">
                    <option value=""></option>
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                    <option value="2">Other</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-600">Age:</label>
                <input type="number" id="age" name="age" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <div class="mb-4">
                <label for="hypertension" class="block text-sm font-medium text-gray-600">Hypertension:</label>
                <select id="hypertension" name="hypertension" class="mt-1 p-2 w-full border rounded-md">
                    <option value=""></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="heart_disease" class="block text-sm font-medium text-gray-600">Heart Disease:</label>
                <select id="heart_disease" name="heart_disease" class="mt-1 p-2 w-full border rounded-md">
                    <option value=""></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="ever_married" class="block text-sm font-medium text-gray-600">Ever Married:</label>
                <select id="ever_married" name="ever_married" class="mt-1 p-2 w-full border rounded-md">
                    <option value=""></option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="work_type" class="block text-sm font-medium text-gray-600">Work Type:</label>
                <select id="work_type" name="work_type" class="mt-1 p-2 w-full border rounded-md">
                    <option value=""></option>
                    <option value="0">Private</option>
                    <option value="1">Self Employed</option>
                    <option value="2">Govt Job</option>
                    <option value="3">Children</option>
                    <option value="4">Never Worked</option>
                </select>
            </div>


            <div class="mb-4">
                <label for="Residence_type" class="block text-sm font-medium text-gray-600">Residence Type:</label>
                <select id="Residence_type" name="Residence_type" class="mt-1 p-2 w-full border rounded-md">
                    <option value=""></option>
                    <option value="0">Urban</option>
                    <option value="1">Rural</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="avg_glucose_level" class="block text-sm font-medium text-gray-600">Average Glucose
                    Level:</label>
                <input type="number" id="avg_glucose_level" name="avg_glucose_level"
                    class="mt-1 p-2 w-full border rounded-md" step="any">
            </div>

            <div class="mb-4">
                <label for="bmi" class="block text-sm font-medium text-gray-600">BMI:</label>
                <input type="number" id="bmi" name="bmi" class="mt-1 p-2 w-full border rounded-md" step="any">
            </div>


            <div class="mb-4">
                <label for="smoking_status" class="block text-sm font-medium text-gray-600">Smoking Status:</label>
                <select id="smoking_status" name="smoking_status" class="mt-1 p-2 w-full border rounded-md">
                    <option value=""></option>
                    <option value="0">Formerly Smoked</option>
                    <option value="1">Never Smoked</option>
                    <option value="2">Smokes</option>
                    <option value="3">Unknown</option>
                </select>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-3 rounded-md"
                    value="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
<?php
// process_form.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = 'http://localhost:5000/predict_stroke';  // URL of your Flask API

    // Data array
    $data = array(
        'gender' => $_POST['gender'],
        'age' => $_POST['age'],
        'hypertension' => $_POST['hypertension'],
        'heart_disease' => $_POST['heart_disease'],
        'ever_married' => $_POST['ever_married'],
        'work_type' => $_POST['work_type'],
        'Residence_type' => $_POST['Residence_type'],
        'avg_glucose_level' => $_POST['avg_glucose_level'],
        'bmi' => $_POST['bmi'],
        'smoking_status' => $_POST['smoking_status']
        // Add other fields as necessary
    );

    // Initialize cURL
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Handle the response from your Flask application
    if ($response) {
        // Assuming the response is JSON
        $decoded = json_decode($response, true);
        $prediction = $decoded['prediction'][0];  // Adjust according to your response structure

        // Custom message based on prediction
        if ($prediction == 0) {
            echo 'You have no stroke.';
        } elseif ($prediction == 1) {
            echo 'You have a stroke.';
        } else {
            echo 'Invalid prediction value.';
        }
    } else {
        echo 'Error: No response from API';
    }
}
?>
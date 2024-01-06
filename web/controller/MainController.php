<?php
$data = array(
    'feature1' => $_POST['feature1'],
    'feature2' => $_POST['feature2'],
    // ... other features
);

$data_json = json_encode($data);

$ch = curl_init('http://localhost:5000/predict_stroke');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$response_data = json_decode($response, true);

// Display the prediction on the website
echo "Prediction: " . $response_data['prediction'];
?>
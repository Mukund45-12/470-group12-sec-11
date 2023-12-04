<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $skinType = $_POST['skin_type'];
    $concerns = $_POST['concerns'];

    // Process the consultation data (e.g., store in the database, call Python ML model, etc.)

    // Return a JSON response
    header('Content-Type: application/json');
    echo json_encode(['result' => 'Your personalized skincare recommendations.']);
    exit();
}

// Call Python script to get skincare recommendations
$pythonScript = 'ml_model.py';
$command = escapeshellcmd("python $pythonScript $skinType $concerns");
$skincareRecommendations = shell_exec($command);

// Return a JSON response
header('Content-Type: application/json');
echo json_encode(['result' => $skincareRecommendations]);
exit();
?>
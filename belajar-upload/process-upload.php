<?php

$fileFormName = 'data';
$targetDir = 'uploads/';
$allowedExtension = ['jpg', 'jpeg', 'xlsx', 'png'];

if (isset($_POST) && ! empty($_FILES[$fileFormName])) {
    $cleanName = str_replace([' ', '_'], '-', basename($_FILES[$fileFormName]['name']));
    $fileName = time() . '-' . $cleanName;
    $filepath = $targetDir . $fileName;

    $fileExtension = pathinfo($filepath, PATHINFO_EXTENSION);
    if (in_array($fileExtension, $allowedExtension)) {
        if(move_uploaded_file($_FILES[$fileFormName]['tmp_name'], $filepath)) {
            $status = true;
            $message = 'Sukses upload file!';
        } else {
            $status = false;
            $message = 'Gagal upload file!';
        }
    } else {
        $status = false;
        $message = 'Ekstensi file tidak diperbolehkan!';
    }
} else {
    $status = false;
    $message = 'File harus ada!';
}
header("Content-Type: application/json");
echo json_encode([
    'status' => $status,
    'message' => $message
]);
exit;

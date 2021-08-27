<?php

/**
 * Class FileManger
 */
class FileManger
{
    /**
     * @param $file
     */
    public function UploadImage(array $file): string
    {

        $tabExtension = explode('.', $file['name']);

        $extension = strtolower(end($tabExtension));

        $extensionAutrosiee = ['png', 'jpg', 'jpeg'];
        $tailleMx = 500000; //a voir avec macy
        $uniqueName = uniqid('', true);
        $fileName = $uniqueName . '.' . $extension;
        $target_dir = '../upload/' . $fileName;


        if (in_array($extension, $extensionAutrosiee)) {


            if ($file['size'] < $tailleMx && $file['error'] == 0) {
                move_uploaded_file($file['tmp_name'], $target_dir);
            } else {
                header('Location: ../admin/slide_disply.php?error=siz');
                exit();
            }
        } else {
            header('Location: ../admin/slide_disply.php?error=ext');
            exit();
        }
        return $fileName;
    }
}

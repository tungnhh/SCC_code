<?php
require_once "google/google-api-php-client/src/Google_Client.php";

require_once "google/google-api-php-client/src/contrib/Google_DriveService.php";

require_once "google/google-api-php-client/src/contrib/Google_Oauth2Service.php";

require_once "google/vendor/autoload.php";



function buildService() {//function for first build up service

    $DRIVE_SCOPE = 'https://www.googleapis.com/auth/drive';
    $SERVICE_ACCOUNT_EMAIL = 'test-828@charged-kiln-201016.iam.gserviceaccount.com';
    $SERVICE_ACCOUNT_PKCS12_FILE_PATH = 'Test-2c5cbfee4faf.p12';

  $key = file_get_contents($SERVICE_ACCOUNT_PKCS12_FILE_PATH, $SERVICE_ACCOUNT_PKCS12_FILE_PATH);
  $auth = new Google_AssertionCredentials(
      $SERVICE_ACCOUNT_EMAIL,
      array($DRIVE_SCOPE),
      $key);
  $client = new Google_Client();
  $client->setUseObjects(true);
  $client->setAssertionCredentials($auth);
  return new Google_DriveService($client);
}
/**
 * Print a file's metadata.
 *
 * @param Google_Service_Drive $service Drive API service instance.
 * @param string $fileId ID of the file to print metadata for.
 */
function printFile($service, $fileId) {
  try {
    $file = $service->files->get($fileId);

    print "Title: " . $file->getTitle();
    print "Description: " . $file->getDescription();
    print "MIME type: " . $file->getMimeType();
  } catch (Exception $e) {
    print "An error occurred: " . $e->getMessage();
  }
}

/**
 * Download a file's content.
 *
 * @param Google_Service_Drive $service Drive API service instance.
 * @param File $file Drive File instance.
 * @return String The file's content if successful, null otherwise.
 */

function downloadFile($service, $file) {
  $downloadUrl = $file->getDownloadUrl();
  if ($downloadUrl) {
    $request = new Google_HttpRequest($downloadUrl, 'GET', null, null);
    $httpRequest = Google_Client::$io->authenticatedRequest($request);
    if ($httpRequest->getResponseHttpCode() == 200) {

     return $httpRequest->getResponseBody();
    } else {
        // An error occurred.
      return null;
  }
  } else {
    // The file doesn't have any content stored on Drive.
    return null;
  }
}

?>
<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('include/MVC/View/SugarView.php');
require_once('include/tcpdf/tcpdf.php');

class PdfView extends SugarView {

    /**
     * Override init to disable content aside from the body
     *
     * @param type $bean
     * @param type $view_object_map
     */
    public function init($bean = null, $view_object_map = array()) {
        $this->options['show_header'] = false;
        $this->options['show_title'] = false;
        $this->options['show_subpanels'] = false;
        $this->options['show_footer'] = false;
        $this->options['show_javascript'] = false;
        $this->options['view_print'] = false;

        parent::init($bean, $view_object_map);
    }

    /**
     * @return string the base url of the sugar install
     */
    public function getBaseUrl() {
        if (isset($_SERVER['HTTP_HOST']) && (!empty($_SERVER['HTTP_HOST']))) {
            if (isset($_SERVER['HTTPS']) && (!empty($_SERVER['HTTPS'])) && strtolower($_SERVER['HTTPS']) == 'on') {
                $url = 'https://';
            } else {
                $url = 'http://';
            }
            return $url . $_SERVER['HTTP_HOST'] . str_replace('\\', '/', substr($_SERVER['PHP_SELF'], 0, -24));
        }
    }

    /**
     * Inside display, call this displayPdf to render the PDF
     *
     * @see SugarView::display()
     */
    public function displayPdf($html, $filename) {
        $descriptorspec = array(
            0 => array('pipe', 'r'), // stdin
            1 => array('pipe', 'w'), // stdout
            2 => array('pipe', 'w'), // stderr
        );

        $process = proc_open(dirname(__FILE__) . '/../bin/wkhtmltopdf-amd64 -q - -', $descriptorspec, $pipes);

        // Send the HTML on stdin
        fwrite($pipes[0], $html);
        fclose($pipes[0]);
        // Read the outputs
        $pdf = stream_get_contents($pipes[1]);
        $errors = stream_get_contents($pipes[2]);

        // Close the process
        fclose($pipes[1]);
        $return_value = proc_close($process);

        // Output the results
        $errors = str_replace("QPixmap: Cannot create a QPixmap when no GUI is being used\n", '', $errors);
        $errors = str_replace("QSslSocket: cannot resolve SSLv2_client_method\n", '', $errors);
        $errors = str_replace("QSslSocket: cannot resolve SSLv2_server_method\n", '', $errors);
        if ($errors) {
            // Note: On a live site you should probably log the error and give a
            // more generic error message, for security
            echo 'PDF GENERATOR ERROR:<br />' . nl2br(htmlspecialchars($errors));
        } else {
            header('Content-Type: application/pdf');
            header('Cache-Control: public, must-revalidate, max-age=0'); // HTTP/1.1
            header('Pragma: public');
            header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
            header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
            header('Content-Length: ' . strlen($pdf));
            header('Content-Disposition: inline; filename="' . $filename . '";');
            echo $pdf;
        }
    }

}

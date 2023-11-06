<?php 

namespace Controllers;

use MVC\Router;
use Model\Propiedad;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index(Router $router) {
        $propiedades = Propiedad::get(3);
        $inicio = true;
        $router->render('paginas/index', [
            'propiedades' => $propiedades,
            'inicio' => $inicio
        ]);
    }
    public static function nosotros(Router $router) {
        $router->render('paginas/nosotros', []);
    }
    public static function propiedades(Router $router) {
        $propiedades = Propiedad::all();
        $router->render('paginas/propiedades', [
            'propiedades' => $propiedades
        ]);
    }
    public static function propiedad(Router $router) {
        $id = validarORedireccionar('/propiedades');
        $propiedad = Propiedad::find($id);
        $router->render('paginas/propiedad', [
            'propiedad' => $propiedad
        ]);
    }
    public static function blog(Router $router) {
        $router->render('paginas/blog', [

        ]);
    }
    public static function entrada(Router $router) {
        $router->render('paginas/entrada');
    }
    public static function contacto(Router $router) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Crea una instancia de PHPMailer
            $mail = new PHPMailer();

            // Configura una instancia de PHPMailer
            $mail->isSMTP();

            // Configura SMTP
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '45fcc44ac9a065';
            $mail->Password = 'c802de94069858';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            // Configura el contenido del mail
            $mail->setFrom('admin@bienesraices.com');
            $mail->addAddress('admin@bienesraices.com', 'BienesRaices.com');
            $mail->Subject = 'Tienes un Nuevo Mensaje';

            // Habilitar HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            // Definir el contenido
            $contenido = '<html><p>Tienes un nuevo mensaje</p></html>';
            $mail->Body = $contenido;
            $mail->AltBody = 'Esto es texto alternativo';

            // Enviar el mail
            if($mail->send()) {
                echo "Mensaje enviado";
            } else {
                echo "El mensaje no se pudo enviar. . .";
            }
        }
        $router->render('paginas/contacto', [

        ]);
    }
}
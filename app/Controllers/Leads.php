<?php

namespace App\Controllers;

use DateTime;
use Exception;
use App\Models\Leads_model;
use CoffeeCode\Uploader\File;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

class Leads
{
    protected $mail;
    protected $model;
    public $nome;
    public $email;
    public $segmento;
    public $empresa;
    public $origem;
    public $arquivo;
    public $arquivoPath;
    public $formulario;
    public $titulo_email;
    public $subject;
    public $mensagem;
    public $consentimento;
    public $hash_verifica;
    public $data_site;
    public $segundos_trava = 15;
    public $hash;
    public $body;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->model = new Leads_model();
    }

    public function bloqueioTempo()
    {

        $data1 = new DateTime($this->data_site);
        $data_envio = date('Y-m-d H:i:s');
        $data2 = new DateTime($data_envio);
        $intvl = $data1->diff($data2);
        $segundos = $intvl->s;
        $minutos = $intvl->i;

        $minutos;

        if ($segundos >= $this->segundos_trava) {
            return 'ok';
        } else {
            if ($minutos >= 0) {
                return 'ok';
            } else {
                return 'error';
            }
        }
    }

    public function bloqueiaHash()
    {
        if ($this->hash == $this->hash_verifica) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    public function index()
    {
        $verifica = $this->bloqueioTempo();
        $verifica2 = $this->bloqueiaHash();
        if ($_POST) {
            $this->nome             = isset($_POST['nome']) ? $_POST['nome'] : null;
            $this->email            = isset($_POST['email']) ? $_POST['email'] : null;
            $this->segmento         = isset($_POST['segmento']) ? $_POST['segmento'] : null;
            $this->empresa          = isset($_POST['empresa']) ? $_POST['empresa'] : null;
            $this->origem           = isset($_POST['origem']) ? $_POST['origem'] : null;
            $this->arquivo          = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : null;
            $this->mensagem         = isset($_POST['mensagem']) ? $_POST['mensagem'] : null;
            $this->formulario       = isset($_POST['formulario']) ? $_POST['formulario'] : null;
            $this->consentimento    = isset($_POST['consentimento']) && $_POST['consentimento'] == 'on' ? true : false;
            $this->hash_verifica    = $_SESSION['hash'];
            $this->data_site        = $_SESSION['data_site'];
            $this->hash             = $_POST['hasss'];

            if ($this->arquivo) {
                $this->uploadFile();
            }

            switch ($this->formulario) {
                case 'cliente':
                    $this->subject = 'Contato - Desejo ser Cliente - ' . $this->nome;
                    $this->titulo_email = 'Contato - Desejo ser Cliente - ' . $this->nome;
                    break;
                case 'fornecedor':
                    $this->subject = 'Contato - Desejo ser Fornecedor - ' . $this->nome;
                    $this->titulo_email = 'Contato - Desejo ser Fornecedor - ' . $this->nome;
                    break;
                case 'trabalhe':
                    $this->subject = 'Contato - Trabalhe Conosco - ' . $this->nome;
                    $this->titulo_email = 'Contato - Trabalhe Conosco - ' . $this->nome;
                    break;
                default:
                    break;
            }
            if (($verifica == 'ok') && ($verifica2 == 'ok') && ($this->consentimento == true)) {
                return $this->sendMail();
            }
        }

        echo json_encode("Erro: Bloqueio Tempo - $verifica | Bloqueio Hash - $verifica2");
        return;
    }

    public function uploadFile()
    {
        $arquivo = new File($_SERVER["DOCUMENT_ROOT"] . '/assets', 'arquivos');
        if ($_FILES) {
            try {
                $upload = $arquivo->upload($_FILES['arquivo'], 'CV - ' . $this->nome);
                return $this->arquivoPath = $upload;
            } catch (Exception $e) {
                echo json_encode($e->getMessage());
                return;
            }
        }
    }

    public function save()
    {
        try {
            $this->model->formulario = $this->formulario;
            $this->model->nome = $this->nome;
            $this->model->email = $this->email;
            $this->model->segmento = $this->segmento;
            $this->model->empresa = $this->empresa;
            $this->model->mensagem = $this->mensagem;
            $this->model->consentimento = $this->consentimento;
            $this->model->origem = $this->origem;
            $this->model->arquivo = $this->arquivoPath;

            if ($this->model->save()) {
                echo json_encode('success');
                return;
            };
        } catch (Exception $e) {
            echo json_encode("erro ao salvar: " . $e->getMessage());
            return;
        }
    }

    public function sendMail()
    {
        try {
            $this->mail->SMTPDebug = 0;
            $this->mail->isSMTP();
            $this->mail->Host = 'sandbox.smtp.mailtrap.io';
            $this->mail->SMTPAuth = true;
            $this->mail->Username = '0bd7f60ffff090';
            $this->mail->Password = '2f55f0332b4bed';
            $this->mail->SMTPSecure = 'tls';
            $this->mail->Port = 2525;
            $this->mail->CharSet = 'UTF-8';
            $this->mail->setFrom($this->email, $this->nome);
            $this->mail->addAddress('contact@aunare.net', 'Contato Site');
            if ($this->arquivo) {
                $this->mail->addAttachment($this->arquivoPath);
            }
            $this->mail->isHTML(true);
            $this->mail->Subject = $this->subject;
            $this->mail->Body = $this->getMessage($this->formulario);

            if ($this->mail->send()) {
                return $this->save();
            }
        } catch (PHPMailerException $e) {
            echo json_encode("erro ao enviar o e-mail: " . $e->errorMessage());
            return;
        }
    }

    public function getMessage(string $formulario)
    {
        switch ($formulario) {
            case 'cliente':
                return $this->body = '
                <html>
					<body>
						<center style="color: #333">
							<table width="620" border="0" cellpadding="0" style="background-color: #eeeeee; padding-top: 20px; padding-bottom: 20px;">
								<tr>
									<td align="center">
									' . utf8_decode($this->titulo_email) . '
									</td>
								</tr>
							</table>
							<table width="620" border="0" cellpadding="0" style="background-color: #fff">
								<tr>
									<td align="left" style="font-family: verdana">
										<br>

										<b>Nome:</b> ' . utf8_decode($this->nome) . '<br>
										<b>E-Mail:</b> ' . utf8_decode($this->email) . '<br>
										<b>Segmento:</b> ' . utf8_decode($this->segmento) . '<br>
										<b>Mensagem:</b> ' . utf8_decode($this->mensagem) . '<br><br>
										<br>

									</td>
								</tr>
							</table>
							<table width="620" border="0" cellpadding="0" style="background-color: #eeeeee; padding-top: 20px; padding-bottom: 20px;">
								<tr>
									<td align="center">
									</td>
								</tr>
							</table>
						</center>
					</body>
				</html>';
                break;
            case 'fornecedor':
                return $this->body = '
                <html>
					<body>
						<center style="color: #333">
							<table width="620" border="0" cellpadding="0" style="background-color: #eeeeee; padding-top: 20px; padding-bottom: 20px;">
								<tr>
									<td align="center">
									' . utf8_decode($this->titulo_email) . '
									</td>
								</tr>
							</table>
							<table width="620" border="0" cellpadding="0" style="background-color: #fff">
								<tr>
									<td align="left" style="font-family: verdana">
										<br>

										<b>Nome:</b> ' . utf8_decode($this->nome) . '<br>
										<b>E-Mail:</b> ' . utf8_decode($this->email) . '<br>
										<b>Empresa:</b> ' . utf8_decode($this->empresa) . '<br>
										<b>Segmento:</b> ' . utf8_decode($this->segmento) . '<br>
										<b>Origem:</b> ' . utf8_decode($this->origem) . '<br>
										<b>Mensagem:</b> ' . utf8_decode($this->mensagem) . '<br><br>
										<br>

									</td>
								</tr>
							</table>
							<table width="620" border="0" cellpadding="0" style="background-color: #eeeeee; padding-top: 20px; padding-bottom: 20px;">
								<tr>
									<td align="center">
									</td>
								</tr>
							</table>
						</center>
					</body>
				</html>
                ';
                break;
            case 'trabalhe':
                return '<html>
					<body>
						<center style="color: #333">
							<table width="620" border="0" cellpadding="0" style="background-color: #eeeeee; padding-top: 20px; padding-bottom: 20px;">
								<tr>
									<td align="center">
									' . utf8_decode($this->titulo_email) . '
									</td>
								</tr>
							</table>
							<table width="620" border="0" cellpadding="0" style="background-color: #fff">
								<tr>
									<td align="left" style="font-family: verdana">
										<br>

										<b>Nome:</b> ' . utf8_decode($this->nome) . '<br>
										<b>E-Mail:</b> ' . utf8_decode($this->email) . '<br>

										<br>

									</td>
								</tr>
							</table>
							<table width="620" border="0" cellpadding="0" style="background-color: #eeeeee; padding-top: 20px; padding-bottom: 20px;">
								<tr>
									<td align="center">
									</td>
								</tr>
							</table>
						</center>
					</body>
				</html>';
                break;
            default:
                break;
        }
    }
}

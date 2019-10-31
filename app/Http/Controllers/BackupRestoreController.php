<?php

namespace App\Http\Controllers;

use App\Ambiente;
use App\Categoria;
use App\DestacadoPublicacion;
use App\Destacados;
use App\Inmueble;
use App\MetodoPago;
use App\Publicacion;
use App\TipoInmueble;
use App\TipoOferta;
use App\Ubicacion;
use App\User;
use App\Zona;
use App\Bitacora;
use App\AgendarCita;

class BackupRestoreController extends Controller
{
    public function index()
    {
        return view('backuprestore.index');
    }

    public function restore(Request $request)
    {

        return $request;
    }

    public function backup()
    {

        $handle = fopen("Backup.txt", "w");
        $categoria = "";
        $categoria = $this->categoria($categoria);
        fwrite($handle, $categoria);

        $zona = "";
        $zona = $this->zona($zona);
        fwrite($handle, $zona);

        $tipoinmueble = "";
        $tipoinmueble = $this->tipoinmueble($tipoinmueble);
        fwrite($handle, $tipoinmueble);

        $metodopago = "";
        $metodopago = $this->metodopago($metodopago);
        fwrite($handle, $metodopago);

        $tipooferta = "";
        $tipooferta = $this->tipooferta($tipooferta);
        fwrite($handle, $tipooferta);

        $inmueble = "";
        $inmueble = $this->inmueble($inmueble);
        fwrite($handle, $inmueble);

        $ubicacion = "";
        $ubicacion = $this->ubicacion($ubicacion);
        fwrite($handle, $ubicacion);

        $ambiente = "";
        $ambiente = $this->ambiente($ambiente);
        fwrite($handle, $ambiente);

        $user = "";
        $user = $this->user($user);
        fwrite($handle, $user);

        $publicacion = "";
        $publicacion = $this->publicacion($publicacion);
        fwrite($handle, $publicacion);

        $destacado = "";
        $destacado = $this->destacado($destacado);
        fwrite($handle, $destacado);

        $destacadopublicacion = "";
        $destacadopublicacion = $this->destacadopublicacion($destacadopublicacion);
        fwrite($handle, $destacadopublicacion);

        $agendarcita = "";
        $agendarcita = $this->agendarcita($agendarcita);
        fwrite($handle, $agendarcita);

        $bitacora = "";
        $bitacora = $this->bitacora($bitacora);
        fwrite($handle, $bitacora);


        // fwrite($handle, "text1.....");
        fclose($handle);

        // header('Content-Type: application/octet-stream');
        header('Content-Type: text/plain');
        header('Content-Disposition: attachment; filename=' . basename('Backup.txt'));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('Backup.txt'));
        readfile('Backup.txt');
        exit;

    }

    public function categoria($categoria)
    {
        $categoriaz = Categoria::all();
        foreach ($categoriaz as $key) {
            $categoria = $categoria . "insert into CATEGORIA values (null,'" . $key->nombreCat . "');" . "\n";
        }
        $categoria = $categoria . "\n";
        return $categoria;
    }

    public function zona($zona)
    {
        $zonaz = Zona::all();
        foreach ($zonaz as $key) {
            $zona = $zona . "insert into ZONA values (null,'" . $key->nombreZon . "');" . "\n";
        }
        $zona = $zona . "\n";
        return $zona;
    }

    public function tipoinmueble($tipoinmueble)
    {
        $tipoinmueblez = TipoInmueble::all();
        foreach ($tipoinmueblez as $key) {
            $tipoinmueble = $tipoinmueble . "insert into TIPOINMUEBLE values (null,'" . $key->tipoInm . "');" . "\n";
        }
        $tipoinmueble = $tipoinmueble . "\n";
        return $tipoinmueble;
    }

    public function metodopago($metodopago)
    {
        $metodopagoz = MetodoPago::all();
        foreach ($metodopagoz as $key) {
            $metodopago = $metodopago . "insert into METODOPAGO values (null,'" . $key->nombre . "','" . $key->descripcion . "');" . "\n";
        }
        $metodopago = $metodopago . "\n";
        return $metodopago;
    }

    public function tipooferta($tipooferta)
    {
        $tipoofertaz = TipoOferta::all();
        foreach ($tipoofertaz as $key) {
            $tipooferta = $tipooferta . "insert into TIPOFERTA values (null,'" . $key->tipTran . "');" . "\n";
        }
        $tipooferta = $tipooferta . "\n";
        return $tipooferta;
    }

    public function inmueble($inmueble)
    {
        $inmueblez = Inmueble::all();
        foreach ($inmueblez as $key) {
            $inmueble = $inmueble . "insert into INMUEBLE values (null," . $key->superficie . ",'" . $key->descripcion . "'," . $key->amoblado . "," . $key->idCategoria . "," . $key->idTipo . "," . $key->idZona . ");" . "\n";
        }
        $inmueble = $inmueble . "\n";
        return $inmueble;
    }

    public function ubicacion($ubicacion)
    {
        $ubicacionz = Ubicacion::all();
        foreach ($ubicacionz as $key) {
            $ubicacion = $ubicacion . "insert into UBICACION values (null," . $key->uv . "," . $key->manzano . ",'" . $key->barrio . "','" . $key->calle . "'," . $key->idIn . ");" . "\n";
        }
        $ubicacion = $ubicacion . "\n";
        return $ubicacion;
    }

    public function ambiente($ambiente)
    {
        $ambientez = Ambiente::all();
        foreach ($ambientez as $key) {
            $ambiente = $ambiente . "insert into AMBIENTE values (null," . $key->nroBaño . "," . $key->nroAmb . "," . $key->cocina . "," . $key->garaje . "," . $key->idInmueble . ");" . "\n";
        }
        $ambiente = $ambiente . "\n";
        return $ambiente;
    }

    public function user($user)
    {
        $userz = User::all();
        foreach ($userz as $key) {
            if ($key->tipo == 'p') {
                if ($key->rol == 'a') {
                    $user = $user . "insert into USERS values (null,'" . $key->name . "','" . $key->apellido . "','" . $key->email . "',NULL,'" . $key->password . "',NULL," . $key->telefono . ",NULL,NULL,NULL,NULL,'" . $key->tipo . "','" . $key->rol . "','" . $key->created_at . "','" . $key->updated_at . "');" . "\n";
                } else {
                    $user = $user . "insert into USERS values (null,'" . $key->name . "','" . $key->apellido . "','" . $key->email . "',NULL,'" . $key->password . "',NULL," . $key->telefono . ",NULL,NULL,NULL,NULL,'" . $key->tipo . "',NULL,'" . $key->created_at . "','" . $key->updated_at . "');" . "\n";
                }
            } else {
                $user = $user . "insert into USERS values (NULL,null,NULL,'" . $key->email . "',NULL,'" . $key->password . "',NULL," . $key->telefono . ",'" . $key->nomEmp . "','" . $key->ciudad . "','" . $key->direccion . "'," . $key->nit . ",'" . $key->tipo . "',NULL,'" . $key->created_at . "','" . $key->updated_at . "');" . "\n";
            }
        }
        $user = $user . "\n";
        return $user;
    }

    public function publicacion($publicacion)
    {
        $publicacionz = Publicacion::all();
        foreach ($publicacionz as $key) {
            $publicacion = $publicacion . "insert into PUBLICACION values (null,'" . $key->nombre . "'," . $key->preVenta . ",'" . $key->fecPub . "','" . $key->fecExp . "','" . $key->estado . "'," . $key->idInmueble . "," . $key->idTiOf . "," . $key->idUsuario . ");" . "\n";
        }
        $publicacion = $publicacion . "\n";
        return $publicacion;
    }

    public function destacado($destacado)
    {
        $destacadoz = Destacados::all();
        foreach ($destacadoz as $key) {
            $destacado = $destacado . "insert into DESCATAD0 values (null," . $key->dias . ",'" . $key->tipTex . "','" . $key->color . "');" . "\n";
        }
        $destacado = $destacado . "\n";
        return $destacado;
    }

    public function destacadopublicacion($destacadopublicacion)
    {

        $destacadopublicacionz = DestacadoPublicacion::all();
        foreach ($destacadopublicacionz as $key) {
            $destacadopublicacion = $destacadopublicacion . "insert into DETALLEPDEST values (null," . $key->idPublicacion . "," . $key->idDestacado . "," . $key->precio . ",'" . $key->Descripcion . "');" . "\n";
        }
        $destacadopublicacion = $destacadopublicacion . "\n";
        return $destacadopublicacion;
    }

    public function agendarcita($agendarcita)
    {
        $agendarcitaz = agendarcita::all();
        foreach ($agendarcitaz as $key) {
            $agendarcita = $agendarcita . "insert into AGENDARCITA values (null,'" .$key->fecha."','".$key->hora."','".$key->direccion."',". $key->idPublicacion.",".$key->idUsuario . ");" . "\n";
        }
        $agendarcita = $agendarcita . "\n";
        return $agendarcita;
    }

    public function bitacora($bitacora)
    {
        $bitacoraz = bitacora::all();
        foreach ($bitacoraz as $key) {
            $bitacora = $bitacora . "insert into BITACORA values (null," .  $key->user_id.",'".  $key->accion."','".  $key->tabla."','".  $key->ip."','".  $key->created_at."','" . $key->updated_at . "');" . "\n";
        }
        $bitacora = $bitacora . "\n";
        return $bitacora;
    }


}

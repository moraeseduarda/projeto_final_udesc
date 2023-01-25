<?php
require_once 'parametros.php';

try {
    $pdo = new PDO($dadosPdo['dns'], $dadosPdo['usuario'], $dadosPdo['senha']);
    $sql = "SELECT
                *
                FROM noticia
                ORDER BY calendario DESC";

    $noticiaList = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    $html = '';
    foreach ($noticiaList as $noticia) {
        $html .= 
                '<div class="col-md-4 noticia-list-item"
                  data-id="' . $noticia['noticia_id'] . '">
                    <div class="card mb-4 shadow-sm">
                      <a href="#">
                      <img src="upload/' . $noticia['imagem'] .'"class="card-img-top" style="height:225px; width:100%; display:block">
                      </a>
                      <div class="card-body">
                        <a style="text-decoration: none;" href="#">
                        <h5 class="card-title text-success">'. $noticia['titulo'] .'</h5>
                        </a>
                        <p class="card-text">'. $noticia['subtitulo'] .'</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-danger disabled">'. $noticia['autor'] .'</button>
                            </div>
                            <small class="text-muted">'. $noticia['calendario'] . '</small>
                        </div>
                      </div>
                    </div>
                  </div>';
        
    }
} catch (Exception $e) {
    $html = '<p>Não foi possível carregar todas as notícias.</p>';
}

echo $html;


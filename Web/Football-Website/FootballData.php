<?php

/**
 * This service class encapsulates football-data.org's RESTful API.
 *
 * @author Daniel Freitag <daniel@football-data.org>
 * @date 04.11.2015 | switched to v2 09.08.2018
 * 
 */
class FootballData {
    
    public $config;
    public $baseUri;
    public $reqPrefs = array();
        
    public function __construct() {
        $this->config = parse_ini_file('config.ini', true);

	// some lame hint for the impatient
	if($this->config['authToken'] == 'YOUR_AUTH_TOKEN' || !isset($this->config['authToken'])) {
		exit('Get your API-Key first and edit config.ini');
	}
        
        $this->baseUri = $this->config['baseUri']; 
        
        $this->reqPrefs['http']['method'] = 'GET';
        $this->reqPrefs['http']['header'] = 'X-Auth-Token: ' . $this->config['authToken'];
    }
    
  
    /**
     * Funcion que retorna todos los partidos disponible en un rango determinado.
     */    
    public function buscarPartidosForRangoFecha($start, $end) {
        $resource = 'matches/?dateFrom=' . $start . '&dateTo=' . $end;

        $response = file_get_contents($this->baseUri . $resource, false, 
                                      stream_context_create($this->reqPrefs));
        
        return json_decode($response);
    }
    
    /**
     * Funcion que retorna las clasificaciones de un año determinado si se encuentra disponible.
     */ 

    public function buscarClasifiByCompeticion($anno) {
	$resource = 'competitions/' . $anno . '/standings';
        $response = file_get_contents($this->baseUri . $resource, false, 
                                      stream_context_create($this->reqPrefs));

        return json_decode($response);
    }

    /**
     * Funcion que retorna los equipos se encuentra en una competicion en un años determinado.
     */ 

    public function buscarEquipoByCompeticion($anno) {
        $resource = 'competitions/' . $anno . '/teams';

        $response = file_get_contents($this->baseUri . $resource, false, 
                                      stream_context_create($this->reqPrefs));
        
        return json_decode($response);
    }
//-----------------------------------------------------

    /**
     * Api de noticias.
     */
    
    public function mostrarNoticias() {
        $resource = 'https://saurav.tech/NewsAPI/top-headlines/category/sports/in.json';

        $response = file_get_contents($resource);
        
        return json_decode($response)->articles;
    }

}

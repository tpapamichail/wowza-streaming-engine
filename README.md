```bash
$ composer require marcelo-correa/wowza-streaming-engine
```
```bash
require __DIR__ . "/vendor/autoload.php";

use WowzaStreamingEngine\Response\Response;
use \WowzaStreamingEngine\WowzaStreamingEngine;

$wse = new WowzaStreamingEngine([
    'host'       => '...',
    'port'       => '8087',
    'username'   => '...',
    'password'   => '...',
    'serverName' => '_defaultServer_',
    'vhostName'  => '_defaultVHost_',
    'debug'      => true,
]);
```
Methods
```bash
    $wse->get('modulo', 'url', callback);
    $wse->post('modulo', 'url', [data], callback);
    $wse->put('modulo', 'url', [data], callback);
    $wse->delete('modulo', 'url', callback);
```

Listar Aplicações
```bash
$result = $wse->get('applications', function (Response $response) {
    return $response->getBodyToArray();
});
```

Listar 1 Aplicação
```bash
$result = $wse->get('applications', 'applicationName', function (Response $response) {
    return $response->getBodyToArray();
});
```

applications : Application Operations

    get applications
        Recupera a lista de Aplicativos para o host especificado
        
    post applications
        Adiciona um aplicativo à lista de aplicativos para o host especificado
        
    get applications/{appName}
        Recupera a configuração de aplicativo especificado
        
    post applications/{appName}
        Adiciona a configuração de aplicativo especificado
        
    put applications/{appName}
        Updates the specified Application configuration
        
    delete applications/{appName}
        Deletes the specified Application configuration
        
    put applications/{appName}/actions/{action}
    
    get applications/{appName}/adv
        Retrieves the specified advanced Application configuration
        
    put applications/{appName}/adv
        Updates the specified advanced Application configuration
        
    post applications/{appName}/adv
        Adds the specified advanced Application configuration
        
    get applications/{appName}/drm
        Retrieves the DRM configuration for the specified Application
        
    put applications/{appName}/drm
        Updates the DRM configuration for the specified Application
        
    get applications/{appName}/drm/adv
        Retrieves the advanced DRM configuration for the specified Application
        
    put applications/{appName}/drm/adv
        Updates the advanced DRM configuration for the specified Application
        
    get applications/{appName}/drm/buydrmmapfile
        Retrieves the BuyDRM stream mapfile for the specified Application
        
    put applications/{appName}/drm/buydrmmapfile
        Updates the BuyDRM stream mapfile for the specified Application
        
    get applications/{appName}/drm/verimatrixmapfile
        Retrieves the Verimatrix stream mapfile for the specified Application
        
    put applications/{appName}/drm/verimatrixmapfile
        Updates the Verimatrix stream mapfile for the specified Application
        
    get applications/{appName}/dvr
        Retrieves the DVR configuration for the specified Application
        
    put applications/{appName}/dvr
        Updates the DVR configuration for the specified Application
        
    get applications/{appName}/dvr/adv
        Retrieves the advanced DVR configuration for the specified Application
        
    put applications/{appName}/dvr/adv
        Updates the advanced DVR configuration for the specified Application
        
    get applications/{appName}/instances
        Retrieves the list of Instances for the specified Application
        
    get applications/{appName}/instances/{instanceName}
        Retrieves the specified Application Instance information
        
    put applications/{appName}/instances/{instanceName}/actions/{action}
    
    get applications/{appName}/instances/{instanceName}/dvrstores
        Retrieves the list of DVR stores associated with this application instance
        
    put applications/{appName}/instances/{instanceName}/dvrstores/actions/{action}
    
    get applications/{appName}/instances/{instanceName}/dvrstores/{dvrStoreName}
        Retrieves the information about a store/converter associated with the application instance
        
    put applications/{appName}/instances/{instanceName}/dvrstores/{dvrStoreName}/actions/{action}
    
    get applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}
        Retrieves the Incoming Stream information for the specifed Incoming Stream
        
    put applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/actions/{action}
    
    get applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/encoder/live
        Retrieves the LiveEncoder configuration for the specified IncomingStream
        
    get applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/encoder/shorturl
        Retrieves the Short URL for the LiveEncoder configuration for the specified IncomingStream
        
    get applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/monitoring/current
        Retrieves the Current Incoming Stream statistics for the specifed Incoming Stream
        
    get applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/sourcecontrol
        Gets information about the Source Control and it's supported features
        
    put applications/{appName}/instances/{instanceName}/incomingstreams/{streamName}/sourcecontrol/actions/{action}
    
    put applications/{appName}/instances/{instanceName}/mediacache/stores/actions/{action}
    
    get applications/{appName}/instances/{instanceName}/streamgroups
        Retrieves the list of Stream Groups for the specified Application Instance
        
    get applications/{appName}/instances/{instanceName}/streamgroups/{groupName}
        Retrieves the specified StreamGroup configuration
        
    put applications/{appName}/instances/{instanceName}/streamgroups/{groupName}/actions/{action}
    
    get applications/{appName}/instances/{instanceName}/streamrecorders
        Retrieves the list of Stream Recorders for the specified Application Instance
        
    post applications/{appName}/instances/{instanceName}/streamrecorders
        Creates a new Stream Recorder in the specified Application Instance and starts recording
        
    get applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}
        Retrieves the specifed Stream Recorder
        
    post applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}
        Creates a new Stream Recorder and starts recording
        
    put applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}/actions/{action}
    
    get applications/{appName}/instances/{instanceName}/streamrecorders/{recorderName}/default
        Retrieves a Stream Recorder of the requested name, popluated with the default values
        
    get applications/{appName}/modules
        Retrieves the list of Modules for the specified Application
        
    put applications/{appName}/modules
        Updates the list of Modules for the specified Application
        
    get applications/{appName}/monitoring/current
        Retrieves the current Application statistics
        
    get applications/{appName}/monitoring/historic
        Retrieves the historic Application statistics
        
    get applications/{appName}/publishers
        Retrieves the list of Publishers for the specified Application
        
    post applications/{appName}/publishers
        Add a Publisher to list of Publishers for the specified Application
        
    get applications/{appName}/publishers/{publisherName}
        Retrieves the specified Publisher configuration
        
    put applications/{appName}/publishers/{publisherName}
        Updates the specified Publisher configuration
        
    post applications/{appName}/publishers/{publisherName}
        Adds the specified Publisher configuration
        
    delete applications/{appName}/publishers/{publisherName}
        Deletes the specified Publisher configuration
        
    get applications/{appName}/pushpublish/mapentries
        Retrieves the list of PushPublish map entries for the specified Application
    put applications/{appName}/pushpublish/mapentries
    
    post applications/{appName}/pushpublish/mapentries
        Adds a PushPublish map entry to list of PushPublish map entries for the specified Application
        
    get applications/{appName}/pushpublish/mapentries/{entryName}
        Retrieves the specified PushPublish map entry's configuration for the specified Application
        
    put applications/{appName}/pushpublish/mapentries/{entryName}
        Updates the specified PushPublish map entry's configuration for the specified Application
        
    post applications/{appName}/pushpublish/mapentries/{entryName}
        Adds the specified PushPublish map entry for the specified Application
        
    delete applications/{appName}/pushpublish/mapentries/{entryName}
        Deletes the specified PushPublish map entry for the specified Application
        
    put applications/{appName}/pushpublish/mapentries/{entryName}/actions/{action}
    
    get applications/{appName}/sdpfiles
        Retrieves the list of SDP Files for the specified Application
        
    delete applications/{appName}/sdpfiles/{sdpfileName}
        Deletes the specified SDP file
        
    put applications/{appName}/sdpfiles/{sdpfileName}/actions/{action}
    
    get applications/{appName}/security
        Retrieves the Security configuration for the specified Application
        
    put applications/{appName}/security
        Updates the Security configuration for the specified Application
        
    get applications/{appName}/smilfiles
        Retrieves the list of SMIL Files for the specified Application
        
    post applications/{appName}/smilfiles
        Adds a SMIL File to the list of SMIL Files for the specified Application
        
    get applications/{appName}/smilfiles/{smilfileName}
        Retrieves the specified SMIL File configuration
        
    delete applications/{appName}/smilfiles/{smilfileName}
        Deletes the specified SMIL File configuration
        
    put applications/{appName}/smilfiles/{smilfileName}
        Updates the specified SMIL File configuration
        
    post applications/{appName}/smilfiles/{smilfileName}
        Adds the specified SMIL File configuration
        
    put applications/{appName}/smilfiles/{smilfileName}/actions/{action}
    
    get applications/{appName}/streamconfiguration
        Retrieves the Stream configuration for the specified Application
        
    put applications/{appName}/streamconfiguration
        Updates the Stream configuration for the specified Application
        
    get applications/{appName}/streamfiles
        Retrieves the list of Stream Files for the specified Application
        
    post applications/{appName}/streamfiles
        Adds a Stream File to the list of Stream Files for the specified Application
        
    get applications/{appName}/streamfiles/{streamfileName}
        Retrieves the specified Stream File configuration
        
    delete applications/{appName}/streamfiles/{streamfileName}
        Deletes the specified Stream File configuration
        
    put applications/{appName}/streamfiles/{streamfileName}
        Updates the specified Stream File configuration
        
    post applications/{appName}/streamfiles/{streamfileName}
        Adds the specified Stream File configuration
        
    put applications/{appName}/streamfiles/{streamfileName}/actions/{action}
    
    get applications/{appName}/streamfiles/{streamfileName}/adv
        Retrieves the Advanced Stream File configuration
        
    put applications/{appName}/streamfiles/{streamfileName}/adv
        Updates the Advanced Stream File configuration
        
    get applications/{appName}/transcoder
        Retrieves the Transcoder configuration for the specified Application
        
    put applications/{appName}/transcoder
        Updates the Transcoder configuration for the specified Application
        
    get applications/{appName}/transcoder/adv
        Retrieves the Advanced Transcoder configuration for the specified Application
        
    put applications/{appName}/transcoder/adv
        Updates the Advanced Transcoder configuration for the specified Application
        
    get applications/{appName}/transcoder/templates
        Retrieves the list of Transcoder Template Configurations for the specified Application
        
    post applications/{appName}/transcoder/templates
        Adds a Transcoder Templates Configuration to the specified Application
        
    get applications/{appName}/transcoder/templates/{templateName}
        Retrieves the specified Trancoder Template configuration
        
    put applications/{appName}/transcoder/templates/{templateName}
        Updates the specified Trancoder Template configuration
        
    post applications/{appName}/transcoder/templates/{templateName}
        Adds the specified Trancoder Template configuration
        
    delete applications/{appName}/transcoder/templates/{templateName}
        Deletes the specified Trancoder Template configuration
        
    put applications/{appName}/transcoder/templates/{templateName}/actions/{action}
    
    get applications/{appName}/transcoder/templates/{templateName}/adv
        Retrieves the Advanced Transcoder Template configuration
        
    put applications/{appName}/transcoder/templates/{templateName}/adv
        Updates the Advanced Transcoder Template configuration
        
    get applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName}
        Retrieves the specified Trancoder Overlay Decode configuration
        
    put applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName}
        Updates the specified Trancoder Overlay Decode configuration
        
    delete applications/{appName}/transcoder/templates/{templateName}/decode/overlays/{overlayName}
        Deletes the specified Trancoder Overlay Decode configuration
        
    get applications/{appName}/transcoder/templates/{templateName}/encodes
        Retrieves the list of Transcoder Encode Configurations for the specified Application
        
    post applications/{appName}/transcoder/templates/{templateName}/encodes
        Adds a Transcoder Encode Configuration to the specified Application
        
    get applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Retrieves the specified Trancoder Encode configuration
        
    post applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Adds the specified Trancoder Encode configuration
        
    put applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Updates the specified Trancoder Encode configuration
        
    delete applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Deletes the specified Trancoder Encode configuration
        
    get applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv
        Retrieves the Advanced Transcoder Encode configuration
        
    put applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv
        Updates the Advanced Transcoder Encode configuration
        
    get applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName}
        Retrieves the specified Trancoder Overlay Encode configuration
        
    put applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName}
        Updates the specified Trancoder Overlay Encode configuration
        
    delete applications/{appName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName}
        Deletes the specified Trancoder Overlay Encode configuration
        
    get applications/{appName}/transcoder/templates/{templateName}/streamnamegroups
        Retrieves the list of Transcoder Stream Name Groups for the specified Template
        
    post applications/{appName}/transcoder/templates/{templateName}/streamnamegroups
        Adds a Transcoder Stream Name Groups Configuration to the specified Template
        
    get applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Retrieves the specified Trancoder StreamNameGroup configuration
        
    post applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Adds the specified Trancoder StreamNameGroup configuration
        
    put applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Updates the specified Trancoder StreamNameGroup configuration
        
    delete applications/{appName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Deletes the specified Trancoder StreamNameGroup configuration
        
    post applications/{appName}/wscrestproxy
        Proxies a WSC REST API request

current : Machine Level Current Statistics

    get /v2/machine/monitoring/current
        Retrieves current statictics for the machine

historic : Machine Level Historic Statistics
 
    get /v2/machine/monitoring/historic
        Retrieves historic statictics for the machine
        
licenses : Server Licenses

    get /v2/servers/{serverName}/licenses
        Retrieves the list of server Licenses

    put /v2/servers/{serverName}/licenses
        Updates the Server License list

listeners : Server Listeners

    get /v2/servers/{serverName}/listeners
        Retrieves the list of server Listeners

    put /v2/servers/{serverName}/listeners
        Updates the server Listeners lis

log4j : Server log4j system

    get /v2/servers/{serverName}/log4j
        Retrieves the Server log4j configuration

    put /v2/servers/{serverName}/log4j/actions/{action}
        Tells the log4j system to perform an action

    put /v2/servers/{serverName}/log4j/{loggerName}/actions/{action}
        Tells the specified log4j logger to perform an action

mediacache : Server MediaCache

    get /v2/servers/{serverName}/mediacache
        Retrieves the server MediaCache configuration

    put /v2/servers/{serverName}/mediacache
        Updates the server MediaCache configuration

    get /v2/servers/{serverName}/mediacache/adv
        Retrieves the advanced MediaCache configuration

    put /v2/servers/{serverName}/mediacache/adv
        Updates the advanced MediaCache configuration

    post /v2/servers/{serverName}/mediacache/adv
        Adds an advanced MediaCache configuration

    get /v2/servers/{serverName}/mediacache/sources
        Retrieves the list of MediaCache Sources

    post /v2/servers/{serverName}/mediacache/sources
        Adds the specified MediaCache Source to the list

    get /v2/servers/{serverName}/mediacache/sources/{sourceName}
        Retrieves the specified MediaCache Source configuration

    post /v2/servers/{serverName}/mediacache/sources/{sourceName}
        Adds the specified MediaCache Source configuration

    put /v2/servers/{serverName}/mediacache/sources/{sourceName}
        Updates the specified MediaCache Source configuration

    delete /v2/servers/{serverName}/mediacache/sources/{sourceName}
        Deletes the specified MediaCache Source configuration

    get /v2/servers/{serverName}/mediacache/sources/{sourceName}/adv
        Retrieves the specified advanced MediaCache Source configuration

    put /v2/servers/{serverName}/mediacache/sources/{sourceName}/adv
        Updates the specified advanced MediaCache Source configuration

    post /v2/servers/{serverName}/mediacache/sources/{sourceName}/adv
        Adds the specified advanced MediaCache Source configuration

    get /v2/servers/{serverName}/mediacache/stores
        Retrieves the list of MediaCache Stores

    post /v2/servers/{serverName}/mediacache/stores
        Adds the specified MediaCache Store to the list

    get /v2/servers/{serverName}/mediacache/stores/{storeName}
        Retrieves the specified MediaCache Store configuration

    post /v2/servers/{serverName}/mediacache/stores/{storeName}
        Adds the specified MediaCache Store configuration

    put /v2/servers/{serverName}/mediacache/stores/{storeName}
        Updates the specified MediaCache Store configuration

    delete /v2/servers/{serverName}/mediacache/stores/{storeName}
        Deletes the specified MediaCache Store configuration

    get /v2/servers/{serverName}/mediacache/stores/{storeName}/adv
        Retrieves the specified advanced MediaCache Store configuration

    put /v2/servers/{serverName}/mediacache/stores/{storeName}/adv
        Updates the specified advanced MediaCache Store configuration

    post /v2/servers/{serverName}/mediacache/stores/{storeName}/adv
        Adds the specified advanced MediaCache Store configuration


mediacache : Server MediaCache Version 3

    get /v3/servers/{serverName}/mediacache
        Retrieves the server MediaCache configuration

    put /v3/servers/{serverName}/mediacache
        Updates the server MediaCache configuration

    get /v3/servers/{serverName}/mediacache/sources
        Retrieves the list of MediaCache Sources

    post /v3/servers/{serverName}/mediacache/sources
        Adds the specified MediaCache Source to the list

    get /v3/servers/{serverName}/mediacache/sources/{sourceName}
        Retrieves the specified MediaCache Source configuration

    post /v3/servers/{serverName}/mediacache/sources/{sourceName}
        Adds the specified MediaCache Source configuration

    put /v3/servers/{serverName}/mediacache/sources/{sourceName}
        Updates the specified MediaCache Source configuration

    delete /v3/servers/{serverName}/mediacache/sources/{sourceName}
        Deletes the specified MediaCache Source configuration

    get /v3/servers/{serverName}/mediacache/sources/{sourceName}/adv
        Retrieves the specified advanced MediaCache Source configuration

    put /v3/servers/{serverName}/mediacache/sources/{sourceName}/adv
        Updates the specified advanced MediaCache Source configuration

    post /v3/servers/{serverName}/mediacache/sources/{sourceName}/adv
        Adds the specified advanced MediaCache Source configuration

    get /v3/servers/{serverName}/mediacache/stores
        Retrieves the list of MediaCache Stores

    post /v3/servers/{serverName}/mediacache/stores
        Adds the specified MediaCache Store to the list

    get /v3/servers/{serverName}/mediacache/stores/{storeName}
        Retrieves the specified MediaCache Store configuration

    post /v3/servers/{serverName}/mediacache/stores/{storeName}
        Adds the specified MediaCache Store configuration

    put /v3/servers/{serverName}/mediacache/stores/{storeName}
        Updates the specified MediaCache Store configuration

    delete /v3/servers/{serverName}/mediacache/stores/{storeName}
        Deletes the specified MediaCache Store configuration

mediacasters : Server MediaCasters

    get /v2/servers/{serverName}/mediacasters
        Retrieves the list of MediaCasters

    get /v2/servers/{serverName}/mediacasters/{mediacastername}
        Retrieves the specified MediaCaster configuration

monitoring : Server Monitoring

    get /v2/servers/{serverName}/monitoring
        Retrieves the server monitoring configuration

    put /v2/servers/{serverName}/monitoring
        Updates the server monitoring configuration

publishers : Server Publishers

    get /v2/servers/{serverName}/publishers
        Retrieves the list of server Publishers

    post /v2/servers/{serverName}/publishers
        Adds a new Publisher to the list

    get /v2/servers/{serverName}/publishers/{publisher}
        Retrieves the specified Publisher configuration

    post /v2/servers/{serverName}/publishers/{publisher}
        Adds the specified Publisher configuration

    delete /v2/servers/{serverName}/publishers/{publisher}
        Deletes the specified Publisher configuration

publishers : Server Publishers Version 3

    get /v3/servers/{serverName}/publishers
        Retrieves the list of server Publishers

    post /v3/servers/{serverName}/publishers
        Adds a new Publisher to the list

    put /v3/servers/{serverName}/publishers/{publisher}

    get /v3/servers/{serverName}/publishers/{publisher}
        Retrieves the specified Publisher configuration

    post /v3/servers/{serverName}/publishers/{publisher}
        Adds the specified Publisher configuration

    delete /v3/servers/{serverName}/publishers/{publisher}
        Deletes the specified Publisher configuration

restinfo : REST information

    get /restinfo
        Retrieves the REST configuration information

servers : Servers Configuration

    get /v2/servers
        Retrieves the list of Servers

    get /v2/servers/{serverName}
        Retrieves the Server configuration

    put /v2/servers/{serverName}
        Updates the Server configuration

    put /v2/servers/{serverName}/actions/{action}
        Tells the Server to perform an action

    get /v2/servers/{serverName}/adv
        Retrieves the advanced Server configuration

    put /v2/servers/{serverName}/adv
        Updates the advanced Server configuration

    get /v2/servers/{serverName}/logfiles
        Retrieves the list of server log files

    get /v2/servers/{serverName}/logfiles/{logName}
        Retrieves the contents of a Server Log with the specified log name

    get /v2/servers/{serverName}/logfiles/{logName}/download
        Retrieves the Server Log file for the specified log name, zipped

    get /v2/servers/{serverName}/logs
        Retrieves the list of available server Log Types

    get /v2/servers/{serverName}/logs/{logType}
        Retrieves the contents of multiple Server Logs with the specified type in the log name

    get /v2/servers/{serverName}/sourcecontrol/drivernames
        Get the list of source control drivers

status : Server Status

    get /v2/servers/{serverName}/status
        Retrieves the server Status


transcoder : Server Transcoder

    get /v2/servers/{serverName}/transcoder
        Retrieves the Transcoder information

tune : Server Tuning

    get /v2/servers/{serverName}/tune
        Retrieves the server Tuning configuration

    put /v2/servers/{serverName}/tune
        Updates the server Tuning configuration

users : Server Users

    get /v2/servers/{serverName}/users
        Retrieves the list of server Users

    post /v2/servers/{serverName}/users
        Adds a new server User to the list

    get /v2/servers/{serverName}/users/{userName}
        Retrieves the specified User configuration

    put /v2/servers/{serverName}/users/{userName}
        Updates the specified User configuration

    post /v2/servers/{serverName}/users/{userName}
        Adds the specified User configuration

    delete /v2/servers/{serverName}/users/{userName}
        Deletes the specified User configuration

vhosts : VHost Operations 

    get /v2/servers/{serverName}/vhosts
        Retrieves the list of VHosts

    get /v2/servers/{serverName}/vhosts/{vhostName}
        Retrieves the specified VHost configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}
        Updates the specified VHost configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/actions/{action}

    get /v2/servers/{serverName}/vhosts/{vhostName}/adv
        Retrieves the specified advanced VHost configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/adv
        Updates the specified advanced VHost configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/hostports
        Retrieves the list of server HostPorts for the specified vhost

    get /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}
        Retrieves the HostPort for the specifed vhost and port

    get /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/adv
        Retrieves the advanced HostPort configuration for the specified vhost and port

    put /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/adv

    get /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/ssl
        Retrieves the SSL configuration for the specified vhost and port

    put /v2/servers/{serverName}/vhosts/{vhostName}/hostports/{portname}/ssl
        Updates the SSL configuration for the specified vhost and port

    get /v2/servers/{serverName}/vhosts/{vhostName}/mediacache/stores
        Retrieves all entries in the MediaCache system

    put /v2/servers/{serverName}/vhosts/{vhostName}/mediacache/stores/actions/{action}

    get /v2/servers/{serverName}/vhosts/{vhostName}/monitoring/current
        Retrieves the current VHost statistics

    get /v2/servers/{serverName}/vhosts/{vhostName}/monitoring/historic
        Retrieves the historic VHost statistics

    get /v2/servers/{serverName}/vhosts/{vhostName}/publishers
        Retrieves the list of Publishers for the specified VHost

    post /v2/servers/{serverName}/vhosts/{vhostName}/publishers
        Add a Publisher to list of Publishers for the specified VHost

    get /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName}
        Retrieves the specified Publisher configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName}
        Updates the specified Publisher configuration

    post /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName}
        Adds the specified Publisher configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/publishers/{publisherName}
        Deletes the specified Publisher configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles
        Retrieves the list of SDP Files for the specified VHost

    delete /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles/{sdpfileName}
        Deletes the specified SDP file

    put /v2/servers/{serverName}/vhosts/{vhostName}/sdpfiles/{sdpfileName}/actions/{action}

    get /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles
        Retrieves the list of SMIL Files for the specified VHost

    post /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles
        Adds a SMIL File to the list of SMIL Files for the specified VHost

    get /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName}
        Retrieves the specified SMIL File configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName}
        Deletes the specified SMIL File configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName}
        Updates the specified SMIL File configuration

    post /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName}
        Adds the specified SMIL File configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/smilfiles/{smilfileName}/actions/{action}

    get /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams
        Retrieves the list of Startup Streams for the specified VHost

    post /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams
        Adds a Startup Stream to the list of Startup Streams for the specified VHost

    get /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName}
        Retrieves the specified Startup Stream configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName}
        Deletes the specified Startup Stream configuration

    post /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName}
        Adds the specified Startup Stream configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/startupstreams/applications/{appName}/instances/{instanceName}/streams/{streamName}
        Updates the specified Startup Stream configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles
        Retrieves the list of Stream Files for the specified VHost

    post /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles
        Adds a Stream File to the list of Stream Files for the specified VHost

    get /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}
        Retrieves the specified Stream File configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}
        Deletes the specified Stream File configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}
        Updates the specified Stream File configuration

    post /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}
        Adds the specified Stream File configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/actions/{action}

    get /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/adv
        Retrieves the Advanced Stream File configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/streamfiles/{streamfileName}/adv
        Updates the Advanced Stream File configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder
        Retrieves the Transcoder configuration for the specified VHost

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder
        Updates the Transcoder configuration for the specified VHost

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates
        Retrieves the list of Transcoder Template Configurations for the specified VHost

    post /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates
        Adds a Transcoder Templates Configuration to the specified VHost

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}
        Retrieves the specified Trancoder Template configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}
        Updates the specified Trancoder Template configuration

    post /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}
        Adds the specified Trancoder Template configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}
        Deletes the specified Trancoder Template configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/actions/{action}

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/adv
        Retrieves the Advanced Transcoder Template configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/adv
        Updates the Advanced Transcoder Template configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName}
        Retrieves the specified Trancoder Overlay Decode configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName}
        Updates the specified Trancoder Overlay Decode configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/decode/overlays/{overlayName}
        Deletes the specified Trancoder Overlay Decode configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes
        Retrieves the list of Transcoder Encode Configurations for the specified VHost

    post /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes
        Adds a Transcoder Encode Configuration to the specified VHost

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Retrieves the specified Trancoder Encode configuration

    post /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Adds the specified Trancoder Encode configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Updates the specified Trancoder Encode configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}
        Deletes the specified Trancoder Encode configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv
        Retrieves the Advanced Transcoder Encode configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/adv
        Updates the Advanced Transcoder Encode configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName}
        Retrieves the specified Trancoder Overlay Encode configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName}
        Updates the specified Trancoder Overlay Encode configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/encodes/{encodeName}/overlays/{overlayName}
        Deletes the specified Trancoder Overlay Encode configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups
        Retrieves the list of Transcoder Stream Name Groups for the specified Template

    post /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups
        Adds a Transcoder Stream Name Groups Configuration to the specified Template

    get /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Retrieves the specified Trancoder StreamNameGroup configuration

    put /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Updates the specified Trancoder StreamNameGroup configuration

    post /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Adds the specified Trancoder StreamNameGroup configuration

    delete /v2/servers/{serverName}/vhosts/{vhostName}/transcoder/templates/{templateName}/streamnamegroups/{groupName}
        Deletes the specified Trancoder StreamNameGroup configuration

    get /v2/servers/{serverName}/vhosts/{vhostName}/tune
        Retrieves the Tuning configuration for the specifed vhost

    put /v2/servers/{serverName}/vhosts/{vhostName}/tune
        Updates the Tuning configuration for the specifed vhost

    get /v2/servers/{serverName}/vhosts/{vhostName}/tunehostports
        Retrieves the host port configuration used for server tuning for the specified vhost

    put /v2/servers/{serverName}/vhosts/{vhostName}/tunehostports
        Updates the host port configuration used for server tuning for the specified vhost

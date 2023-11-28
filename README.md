# Introduction 
TODO: Practica con la creación de una API basic con el microframework [FlightPHP](https://flightphp.com/) . 

# Getting Started
TODO: Guide users through getting your code up and running on their own system. In this section you can talk about:
1.	Installation process
2.	Software dependencies

## Route
### GET Index
Para poder obtener de manera general todos los detalles de los datos
``` curl
http://localhost:8090/api/topic
```

### GET Show
Para poder obtener un dato con el id, para poder obtenerlo de manera detallado
``` curl
http://localhost:8090/api/topic/id
```

### POST Store
Para poder guardar datos en la BD
``` curl
http://localhost:8090/api/topic
```
``` json
{
    "title":"title",
    "message":"message",
    "status":"status",
    "author":"author",
    "course":"course"
}
```

### PUT Update
Para poder actualizar los datos debe indicar el id e ingresar los datos necesarios
``` curl
http://localhost:8090/api/topic/id
```
``` json
{
    "title":"title",
    "message":"message",
    "status":"status",
    "author":"author",
    "course":"course"
}
```

### DELETE Destroy
Para poder eliminar algun registro debe ingresar el id 
``` curl
http://localhost:8090/api/topic/id
```

# Build and Test
TODO: Describe and show how to build your code and run the tests. 
Test connection in process

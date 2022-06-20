create table FlujoProceso
(        
Flujo varchar(3),
Proceso varchar(3),
ProcesoSiguiente varchar(3),
Tipo varchar(1),
Pantalla varchar(50),
Rol varchar(20)
)

create table FlujoProcesoCondicionante      
(
Flujo  varchar(3),
Proceso  varchar(3),
ProcesoSI  varchar(3),
ProcesoNO varchar(3)
)
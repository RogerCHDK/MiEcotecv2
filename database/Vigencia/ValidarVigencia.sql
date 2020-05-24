--Consultar si el controlador de eventos global event_scheduler esta activado
SHOW VARIABLES WHERE VARIABLE_NAME = 'event_scheduler'

--Activar el controlador de eventos global, si no esta activado
SET GLOBAL event_scheduler = ON;

--Crear evento el cual se va a ejecutar diariamente
DELIMITER $$

CREATE EVENT IF NOT EXISTS validarVigencia_Pagos
    ON SCHEDULE EVERY 1 DAY
    ON COMPLETION PRESERVE
    DO BEGIN
      DELETE FROM pagos WHERE CURDATE() = vigencia AND 
                        fechaAprobacion IS NOT NULL AND
                        vigencia IS NOT NULL;
    END  $$ 

DELIMITER ;

--Consultar si se creó
SHOW events;

--Consultar información del evento
SELECT * FROM INFORMATION_SCHEMA.EVENTS;
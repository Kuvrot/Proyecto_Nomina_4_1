# Proyecto_Nomina_4_1
4_2 Proyecto de asignatura: Nómina

Los requerimientos para el proyecto de asignatura son:

    Desarrollar un programa PHP para llevar el control de una nómina de una empresa, el cual debe:

    Registrar varios trabajadores, para cada uno registrar: un número de empleado, su nombre, apellido paterno y materno.
    Registrar el pago por hora normal y por hora extra trabajada.
    Registrar el límite de horas trabajadas para ser consideradas como pago de horas normales. Si un trabajador excede este límite la diferencia serán pagadas como horas extra. Digamos que el límite sea 40 y el trabajador trabaja 45 horas, se le pagan 40 como hora normal y 5 como hora extra.
    Registrar la cantidad límite de ingreso para seleccionar el porcentaje de retención por cuestiones de impuesto sobre la renta (ISR). Así mismo registrar también ambos porcentajes. Digamos que el límite sea 1000, si ganase menos de 1000 se le retendría el 25% y si ganase más de 1000 se le retendría 33%.
    Registrar el porcentaje del sueldo base (sin retenciones) que se abonará a la cuenta de Vivienda.
    Registrar el porcentaje del sueldo base (sin retenciones) que se abonará a la cuenta de Ahorro para el retiro.
    Registrar el porcentaje del sueldo base (sin retenciones) que se abonará a la cuenta del Seguro Social.
    Registrar el número de cheque inicial para la nómina.
    El sueldo base se considera la suma del pago de horas normales más el pago de horas extra si es que las tiene.
    Como operación cotidiana, se registrará para cada trabajador las horas trabajadas hasta el momento de correr la nómina, esto es, cada vez que se corre la nómina ya están capturadas las horas.
    Como salida se desea un reporte que contenga en cada página su encabezado, el contenido y un pie de pagina. El contenido tendrá el número de cheque, nombre completo del trabajador empezando con apellido paterno, total de horas trabajadas, sueldo base, la cantidad retenida por (ISR), cantidad abonada a Vivienda, cantidad abonada a Ahorro, cantidad abonada al Seguro y su sueldo neto. 

    El programa debe tener una interface principal con diseño personalizado donde indique las funciones principales. Puede incluir una interface para tener acceso al programa.
    Cada función del programa debe contemplar interfaces de lectura de datos  o mostrar resultados con estilo CSS.
    El reporte de la nómina se muestra en pantalla como una página web (debe mostrar la simulación de cortes de página).
    Puede limitar el número de trabajadores que se mostrarán por cada página a fin de visualizar la impresión de varias de ellas.
    La impresión de la nómina será en orden alfabético de su apellido paterno, luego materno y nombre.
    Como parte del contenido de la nómina, al finalizar todos los trabajadores mostrar el total de cada uno de los conceptos mostrados en la nómina.
    Incluir al proyecto la generación de la nómina en formato pdf. Debe mostrarse por páginas como la mostrada en página web. 
    Incluir al proyecto la generación de cheques para cada trabajador, el cual incluye: el número de cheque, la fecha, el nombre completo empezando por nombre y luego apellidos, la cantidad a pagar y la cantidad en letra y firma de quien es dueño de la cuenta bancaria (hipotético). 
    Se da por entendido que cada cheque es una hoja.
    La impresión de los cheques será en orden de su número.
    Considerar las cantidades y porcentajes en múltiplos de 5 o 10 para fácil comprobación de resultados.


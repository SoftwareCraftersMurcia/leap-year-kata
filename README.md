# Leap Year Kata

Un año bisiesto corresponde a un año con 366 días. Esto ocurre porque la tierra
tarda un poco más de 365 días en dar la vuelta completa, concretamente
365.24219, es decir, 365 días con 5 horas, 48 minutos y 56 segundos.

Esta cantidad de tiempo debe recuperarse para cumplir el ciclo que fija las
estaciones en su ocurrencia exacta, por ello, durante tres años contamos solo
365 días y en el cuarto año recuperamos este acumulado, que resultan en un día
más: el 29 de febrero.

Si no se agregase ese día, tras 700 años habría un desfase de unos 175 dias,
provocando que la Navidad cayera en pleno verano.

La expresión es originaria del latín: “bis sextus dies ante calendas martii”,
cuyo significado sería “repítase el sexto día antes del primer día del mes de
marzo”.

## Enunciado

Las siguientes reglas deben ser satisfechas:

1. Un año es bisiesto si es divisible entre 4
2. Un año NO es bisiesto si es divisible entre 100 pero no entre 400

Ejemplos:

- 1997 NO es un año bisiesto (no es divisible entre 4)
- 1996 es un año bisiesto (divisible entre 4)
- 1600 es un año bisiesto (divisible entre 400)
- 1800 NO es un año bisiesto (divisible entre 4, divisible entre 100 pero NO
  divisible entre 400)

El método debe retornar verdadero si el año es bisiesto, falso en caso
contrario.

## Requerimientos

Esta Kata está disponible en los siguientes lenguajes:

- Javascript con [Jest](https://jestjs.io)
- PHP con [PHPUnit](https://phpunit.readthedocs.io/)
- Java con [JUnit](https://github.com/junit-team/junit/wiki)
  y [Mockito](http://site.mockito.org/mockito/docs/current/org/mockito/Mockito.html)

## Configuración específica por lenguaje

### Javascript

1. Instalar [Node](http://nodejs.org/)
2. `npm install` (Estando en la carpeta javascript)
3. `npm test`

### PHP

1. Instalar [composer](https://getcomposer.org/) `curl -sS https://getcomposer.org/installer | php`
2. `composer install` (estando en la carpeta php)
3. `./vendor/bin/phpunit`

### Java

1. Instalar las dependencias y tests con Maven [mvn test]
2. Ejecutar los tests con el IDE

# Leap Year Kata

Un **año bisiesto corresponde a un año con 366 días**. Esto ocurre porque la
tierra tarda un poco más de 365 días en dar la vuelta completa, concretamente
365.24219, es decir, 365 días con 5 horas, 48 minutos y 56 segundos.

Esta cantidad de tiempo debe recuperarse para cumplir el ciclo que fija las
estaciones en su ocurrencia exacta, por ello, durante tres años contamos solo
365 días y en el cuarto año recuperamos este acumulado, que resultan en un día
más: el **29 de febrero**.

Si no se agregase ese día, tras 700 años habría un desfase de unos 175 dias,
provocando que la Navidad cayera en pleno verano.

La expresión es originaria del latín: “bis sextus dies ante calendas martii”,
cuyo significado sería “repítase el sexto día antes del primer día del mes de
marzo”.

## Enunciado

### 📝 Las siguientes reglas deben ser satisfechas:

1. Un año es bisiesto si es divisible entre 4
2. Un año NO es bisiesto si es divisible entre 100 pero no entre 400

Ejemplos:

- 1997 **NO** es un año bisiesto (no es divisible entre 4)
- 1996 es un año bisiesto (divisible entre 4)
- 1800 **NO** es un año bisiesto (divisible entre 4, adicionalmente es divisible
  entre 100, pero no entre 400)
- 1600 es un año bisiesto (divisible entre 400)

El método `isLeapYear()` debe retornar verdadero si el año es bisiesto, falso en
caso contrario.

### 🔝 Extra

Una vez finalizada la kata, apoyándonos en el método anterior:

1. Mostrar los próximos 10 años bisiestos a partir del año actual
   > Output: `[2024, 2028, 2032, 2036, 2040, 2044, 2048, 2052, 2056, 2060]`

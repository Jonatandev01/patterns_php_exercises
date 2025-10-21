# Guía de ejercicios - Patrones de diseño en PHP

## 📘 Nombre de la Actividad
**Guía de ejercicios patrones de diseño**

---

## 🧑‍💻 Tipo de actividad
Carga de archivos  
**Tipo de participación:** Individual  
**Ponderación:** 15%

---

## 🎯 Instrucciones generales

Para esta actividad deberá realizar **4 ejercicios sobre patrones de diseño en PHP.**

Cada ejercicio aplica un patrón de diseño distinto. Se debe implementar el código en PHP y subirlo a un repositorio en **GitHub**, incluyendo este archivo `README.md`.

Al finalizar, **solo debe compartir el enlace de su repositorio de GitHub** en la plataforma de entrega.

---

## 🧩 Ejercicios

### 🧱 Ejercicio 1: Patrón Factory
Crea un programa con dos personajes: **Esqueleto** y **Zombi**.  
Cada uno tiene lógica distinta de ataque y velocidad.  
Según el nivel del juego:
- Nivel fácil → crea un Esqueleto  
- Nivel difícil → crea un Zombi  

🔹 **Patrón aplicado:** Factory  
📁 Carpeta: `ejercicio1_factory`  
🧩 Archivo principal: `run_factory.php`

---

### 🧩 Ejercicio 2: Patrón Adapter
Simula compatibilidad entre versiones de Windows 7 y Windows 10 al abrir archivos de Word, Excel, PowerPoint.  
Windows 10 debe poder abrir archivos antiguos de Windows 7.

🔹 **Patrón aplicado:** Adapter  
📁 Carpeta: `ejercicio2_adapter`  
🧩 Archivo principal: `run_adapter.php`

---

### 🧩 Ejercicio 3: Patrón Decorator
Permite añadir diferentes armas a personajes de videojuegos (por ejemplo, un guerrero y un mago).  
Cada arma aumenta el daño total del personaje.

🔹 **Patrón aplicado:** Decorator  
📁 Carpeta: `ejercicio3_decorator`  
🧩 Archivo principal: `run_decorator.php`

---

### 🧩 Ejercicio 4: Patrón Strategy
El sistema debe mostrar mensajes en distintos tipos de salida:  
- Consola  
- Formato JSON  
- Archivo TXT  

🔹 **Patrón aplicado:** Strategy  
📁 Carpeta: `ejercicio4_strategy`  
🧩 Archivo principal: `run_strategy.php`

---

## 🚀 Instrucciones rápidas de ejecución

1. Clona el repositorio:
   ```bash
   git clone https://github.com/Jonatandev01/patterns_php_exercises.git
   cd patrones-diseno-php

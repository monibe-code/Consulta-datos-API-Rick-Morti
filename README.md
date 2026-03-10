# 🧪 Tarea 9 DWES - Consumo de API Rick & Morty

## 📝 Descripción
Este proyecto forma parte de la **Tarea 9 de Desarrollo de Entorno Servidor (DWES)**. Consiste en una aplicación web que consume el servicio REST oficial de **Rick & Morty** para mostrar de forma dinámica los personajes de la serie.

El script realiza una petición al endpoint de personajes, procesa el JSON recibido y genera una interfaz visual moderna.

## 🚀 Características Técnicas
* **Consumo de Servicio REST:** Implementado en PHP mediante la función `file_get_contents()`.
* **Procesamiento de Datos:** Decodificación de formato JSON a arrays asociativos con `json_decode()`.
* **Frontend Responsivo:** Uso de **Bootstrap 5.3** con un diseño de tarjetas (cards) adaptable a móviles, tablets y escritorio.
* **Estilos Personalizados:** Indicadores visuales de estado (vivo, muerto o desconocido) mediante CSS dinámico.

## 🛠️ Tecnologías utilizadas
* **Backend:** PHP 8.x.
* **Frontend:** HTML5, CSS3 y Framework **Bootstrap 5**.
* **API Externa:** [Rick and Morty API]([https://rickandmortyapi.com/api/character]).

## 📂 Estructura del Proyecto
* `Rick_y_Morty.php`: Contiene toda la lógica de la aplicación (obtención de datos y renderizado HTML).
* `.gitignore`: Configurado para excluir archivos temporales y de caché (`.phpdoc/`).
* `README.md`: Documentación del proyecto.

## 📦 Cómo ejecutarlo localmente
1. Clona este repositorio en tu carpeta de servidor (ej. `htdocs` en XAMPP).
2. Asegúrate de tener activada la extensión `openssl` en tu `php.ini` para permitir peticiones HTTPS.
3. Accede desde tu navegador a:
   ```text
   http://localhost/tu-carpeta/Rick_y_Morty.php

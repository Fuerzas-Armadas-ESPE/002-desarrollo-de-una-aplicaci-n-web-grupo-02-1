const nodemailer = require('nodemailer');

// Configurar el transporte de correo electrónico
const transporter = nodemailer.createTransport({
    service: 'gmail', // Puedes utilizar otros servicios como 'hotmail', 'yahoo', etc.
    auth: {
        user: 'tu_correo@gmail.com', // Tu dirección de correo electrónico
        pass: 'tu_contraseña' // Tu contraseña de correo electrónico
    }
});

// Ruta para manejar el envío del formulario de contacto
app.post('/enviar-formulario', (req, res) => {
    const { nombre, email, mensaje } = req.body;

    // Configurar el correo electrónico
    const mailOptions = {
        from: 'tu_correo@gmail.com', // Remitente
        to: 'tu_correo@gmail.com', // Destinatario
        subject: 'Nuevo mensaje de contacto',
        text: `Nombre: ${nombre}\nCorreo electrónico: ${email}\nMensaje: ${mensaje}`
    };

    // Enviar el correo electrónico
    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            console.log(error);
            res.status(500).send('Error al enviar el correo electrónico');
        } else {
            console.log('Correo electrónico enviado: ' + info.response);
            res.status(200).send('Correo electrónico enviado correctamente');
        }
    });
});
const {
    app,
    BrowserWindow
} = require('electron');

let ventanaPrincipal;

app.on('ready',() => {
    ventanaPrincipal = new BrowserWindow({
        frame:false
    });
    ventanaPrincipal.loadURL(`file://`+__dirname+`/vista/index.html`);
});
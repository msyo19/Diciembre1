const {
    app,
    BrowserWindow
} = require('electron');

let ventanaPrincipal;

app.on('ready',() => {
    ventanaPrincipal = new BrowserWindow({
        frame:true
    });
    ventanaPrincipal.loadURL(`file://`+__dirname+`/vista/index.html`);
});
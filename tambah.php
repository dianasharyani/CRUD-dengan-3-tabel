<html>
    <head>
    
    </head>
    <body>
        
        <h3>Form Tambah</h3>
        <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" />
                </p>
                <p>         
                <p>
                    <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas" />
                </P>
                <p>
                    <label for="jurusan">Jurusan :</label>
                    <select name="jurusan">
                    <option value="RPL">RPL </option>
                    <option value="Busana">Busana </option>
                    <option value="Boga">Boga </option>
                    <option value="TSM">TSM </option>
                    <option value="TL">TL </option>
                    </select> 
                </P>
                <p>
                    <label for="tahun">Tahun:</label>
                    <input type="int" name="tahun" />
                </P>
                <p>
                    <label for="nominal">Nominal:</label>
                    <input type="text" name="nominal" />
                </P>
                <p>
                    <input type="submit" value="Tambah" name="tambah" />
                </p>
            </fieldset>
        </form>
    </body>
</html>
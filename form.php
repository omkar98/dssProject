<h1>DHANAWANTARI SEVABHAVI SANSTHA - ADMIN</h1> <hr>
<h3>A. Upload Images</h3>
  <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file">
      <label for="color">Calegory:</label>
      <select name="cat" id="cat">
          <option value="">--- Choose a category ---</option>
          <option value="women">women</option>
          <option value="health">health</option>
          <option value="water">water</option>
          <option value="addiction">addiction</option>
          <option value="skill">skill</option>
          <option value="yoga">yoga</option>
          <option value="news">news</option>
          <option value="certi">certifications</option>
          <option value="news">news</option> 
          <option value="disability">disability</option> 
        </select> <br> <br>
        <input type="submit" name="submit" value="Upload">
  </form> <hr>
  <h3>B. QR Code - Donation - Image</h3>
  <form action="QRCode.php" method="post" enctype="multipart/form-data">
        Select Image File to Upload:
      <input type="file" name="file">
      <p>Delete Old QR Code? </p>
      <input type="radio" id="yes" name="qrCode" value="yes">
      <label for="yes">YES</label><br>
      <input type="radio" id="no" name="qrCode" value="no">
      <label for="no">NO</label><br>
       
      <br><br>
        <input type="submit" name="submit" value="QR Code">
  </form>
const express = require('express');
const master = require('master.js');

const app = express();
const port = 3000;

app.get('/getData', (req, res) => {
  const data = master.getData();
  res.json(data);
});

app.post('/setData', (req, res) => {
  const newData = req.body;
  master.setData(newData);
  res.send('Data set successfully');
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});

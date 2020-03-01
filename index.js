const fs = require('fs')

try {
    const data = fs.readFileSync('./english.txt', 'utf8')

    var data1 = data.replace(/\s+/g," ")
  //console.log(data)

    var dataMT = data1.match(new RegExp("Monday:" + "(.*)" + "Tuesday:"));
    var dataTW = data1.match(new RegExp("Tuesday:" + "(.*)" + "Wednesday:"));
    var dataWH = data1.match(new RegExp("Wednesday:" + "(.*)" + "Thursday:"));
    var dataHF = data1.match(new RegExp("Thursday:" + "(.*)" + "Friday:"));
    var dataFF = data1.match(new RegExp("Friday:" + "(.*)" + ""));

    var split = "\n DATA SPLIT \n"

    var writeTo = dataMT[1] + split + dataTW[1] + split + dataWH[1] + split + dataHF[1] + split + dataFF[1]

    console.log(writeTo)

    //console.log(dataA[1])

  //   fs.writeFile("./", writeTo, function(err) {
  //     if(err) {
  //         return console.log(err);
  //     }
  //     console.log("The file was saved!");
  // });   

  } catch (err) {
    console.error(err)
  }
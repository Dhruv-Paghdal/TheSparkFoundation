let senderEmailId=document.querySelector("#senderEmail");
let reciverEmailId=document.querySelector("#reciverEmail");
let sender=document.querySelector("#senderName");
let reciver=document.querySelector("#reciverName");
let names=["Harshad Mehta","Bill Gates","Steve Jobs","Elon Musk","Ratan Tata",
"Narayan Murti","Sundar Pichai","Jeff Bezos","Radhakishan Damain","Uday Kotak"];


let senderEmail=()=>{
    console.log("Sender function called");
    let senderNameValue=document.querySelector("#senderName").value;
    switch (senderNameValue) {
        case "Harshad Mehta":
            senderEmailId.value="harshad21@bigbull.com";
            for(let i=1;i<=9;i++){
                document.querySelector(`#reciverOption${i}`).value=names[i];
                document.querySelector(`#reciverOption${i}`).innerHTML=names[i];
            }
            break;

        case "Bill Gates":
            senderEmailId.value="billgates@trading.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=1){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;

        case "Steve Jobs":
            senderEmailId.value="setve@apple.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=2){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;

        case "Elon Musk":
            senderEmailId.value="elon123@tesla.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=3){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;

        case "Ratan Tata":
            senderEmailId.value="ratan45@tata.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=4){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;

        case "Narayan Murti":
            senderEmailId.value="narayan56@infosys.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=5){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;

        case "Sundar Pichai":
            senderEmailId.value="sundar@google.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=6){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;

        case "Jeff Bezos":
            senderEmailId.value="jeff96@amazon.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=7){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;
    
        case "Radhakishan Damain":
            senderEmailId.value="radhakishan562@dmart.com";
            for(let i=0;i<=9;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
                if(i>=8){
                    document.querySelector(`#reciverOption${i+1}`).value=names[i+1];
                    document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i+1];   
                }
            }
            break;   

        case "Uday Kotak":
            senderEmailId.value="uday785@kotak.com";
            for(let i=0;i<10;i++){
                document.querySelector(`#reciverOption${i+1}`).value=names[i];
                document.querySelector(`#reciverOption${i+1}`).innerHTML=names[i];
            }
            break; 

        default:
            break;
    }
}

let reciverEmail=()=>{
    console.log("Reciver function called");
    let reciverNamevalue=document.querySelector("#reciverName").value;
    switch (reciverNamevalue) {
        case "Harshad Mehta":
            reciverEmailId.value="harshad21@bigbull.com";
            break;

        case "Bill Gates":
            reciverEmailId.value="billgates@trading.com";
            break;

        case "Steve Jobs":
            reciverEmailId.value="setve@apple.com";
            break;

        case "Elon Musk":
            reciverEmailId.value="elon123@tesla.com";
            break;

        case "Ratan Tata":
            reciverEmailId.value="ratan45@tata.com";
            break;

        case "Narayan Murti":
            reciverEmailId.value="narayan56@infosys.com";
            break;

        case "Sundar Pichai":
            reciverEmailId.value="sundar@google.com";
            break;

        case "Jeff Bezos":
            reciverEmailId.value="jeff96@amazon.com";
            break;

        case "Radhakishan Damain":
            reciverEmailId.value="radhakishan562@dmart.com";
            break;

        case "Uday Kotak":
            reciverEmailId.value="uday785@kotak.com";
            break;  
    
        default:
            break;
    }
}

sender.addEventListener('change',senderEmail);
reciver.addEventListener('change',reciverEmail);
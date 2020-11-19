window.addEventListener('load', function(){
    //Agregar Mascota
    var formMascota = document.querySelector('#formMascota');

    //cédula del propietario de la mascota
    let params = new URLSearchParams(location.search);
    var cc = params.get('cc');

    formMascota.addEventListener('submit', function(event){
        event.preventDefault();
        var dataForm = new FormData(formMascota);

        dataForm.append("cc", cc);
        
        fetch('../../includes/api/rutesMascota/addMascota.php',{
            method: 'POST',
            body: dataForm
        })
        .then(res  => res.text())
        .then(data => {
            if(data == 'Agregado'){
                listarMascotas();
                document.querySelector('#nombreAnimal').value = '';
            }else{
                console.log(data);
            }       
        })
    });

    //Buscar mascota
    var formMascotasCliente =  document.querySelector('#mascotas-cliente');

    formMascotasCliente.addEventListener('submit', function(e){
        e.preventDefault();
        var nombreMascota =  document.querySelector('#nombreMascota').value;

        listarMascota(nombreMascota);
    });

    /*Inicio activación ventana modal para registrar nueva macosta*/

    var btnAgregarPaciente = document.querySelector('#agregarPaciente');
    var modalPaciente      = document.querySelector('.bg-modal-paciente');

    btnAgregarPaciente.addEventListener('click', function(event){
        event.preventDefault();
        modalPaciente.style.display = "flex";
    });

    modalPaciente.addEventListener('click', function(event){
        var click = event.target;
        if(click == modalPaciente){
            modalPaciente.style.display = "none";
        }
    });

    /*Fin activación ventana modal para registrar nueva macosta*/

});

//Obtener lista de mascotas de un propietario
var tablaMascotas = document.querySelector('#tabla-mascotas-cliente');

function listarMascotas(){
    let params = new URLSearchParams(location.search);
    var cc = params.get('cc');

    fetch(`http://localhost/Santamaria/includes/api/rutesMascota/getMascotas.php?cc=${cc}`)
    .then(res  => res.json())
    .then(data =>{
        if(data.mensaje == 'no'){
            tablaMascotas.innerHTML = `<h2>No tiene mascotas</h2>`;
        }

        if(Object.keys(data.mascota).length >= 1){
            mostrarDatos(data);
        }
    })
}

function listarMascota(nombre){
    let params = new URLSearchParams(location.search);
    var cc = params.get('cc');

    fetch(`http://localhost/Santamaria/includes/api/rutesMascota/getMascota.php?cc=${cc}&nombre=${nombre}`)
    .then(res  => res.json())
    .then(data => {
        if(data.mensaje == 'no'){
            tablaMascotas.innerHTML = `<h2>No exite esa mascota</h2>`;
        }

        if(Object.keys(data.mascota).length >= 1){
            mostrarDatos(data);
        }
    });
}

function mostrarDatos(data){
    tablaMascotas.innerHTML = '';
    for(let valor of data.mascota){
        tablaMascotas.innerHTML += `
        <tr>
        <th scope="row">
            <p>${valor.id}</p>
        </th>
        <th>
            <p>${valor.nombre}</p>
        </th>
        <th>
            <p>${valor.especie}</p>
        </th>
        <th>
            <p>${valor.sexo}</p>
        </th>
        <th>
		<a class="boton-detalle" href="detallesPaciente.php?mascotas=${valor.id}">Detalles del paciente</a>
        </th>
    </tr>
        `
    }
}

listarMascotas();

//Asiganción input especie

var selectEspecie = document.querySelector('#especie');

selectEspecie.addEventListener('change', function(){
    let especie = selectEspecie.value;
 
    var wrapperRaza = document.querySelector('#input-raza-mascota');

    if(especie == 'Felino'){

        wrapperRaza.innerHTML = `
        <select id="raza" name="raza">
            <option value="">Seleccione la raza</option>
            <option value="Bengalí">Bengalí</option>
            <option value="Persa">Persa</option>
            <option value="Exótico">Exótico</option>
            <option value="Angora">Angora</option>
            <option value="Siamés">Siamés</option>
            <option value="Ragdoll">Ragdoll</option>
            <option value="Americano de pelo corto">Americano de pelo corto</option>
            <option value="Americano de pelo largo">Americano de pelo largo</option>
        </select>
        `
    }else{
        

        wrapperRaza.innerHTML = `
        <input class="input-list" list="razas" name="raza">
        <datalist class="datalist" id="razas">
            <option value="KYILEO"></option>
            <option value="TOY AMERICAN ESKIMO">TOY AMERICAN ESKIMO</option>
            <option value="BULLDOG INGLES">BULLDOG INGLES</option>
            <option value="CAVALIER KING CHARLES SPANIEL">CAVALIER KING CHARLES SPANIEL</option>
            <option value="KING CHARLES SPANIEL">KING CHARLES SPANIEL</option>
            <option value="CHIHUAHUA">CHIHUAHUA</option>
            <option value="PERRO DESNUDO MEXICANO">PERRO DESNUDO MEXICANO</option>
            <option value="PERRO DESNUDO DEL PERU">PERRO DESNUDO DEL PERU</option>
            <option value="BICHON HABANERO">BICHON HABANERO</option>
            <option value="GRAND SPITZ">GRAND SPITZ</option>
            <option value="SPITZ MEDIANO">SPITZ MEDIANO</option>
            <option value="SPITZ PEQUEÑO">SPITZ PEQUEÑO</option>
            <option value="POMERANIA">POMERANIA</option>
            <option value="KEESHOND">KEESHOND</option>
            <option value="SPANIEL ENANO">SPANIEL ENANO</option>
            <option value="CANICHE TOY">CANICHE TOY</option>
            <option value="PEQUEÑO PERRO LEON">PEQUEÑO PERRO LEON</option>
            <option value="GALGO ITALIANO">GALGO ITALIANO</option>
            <option value="BICHON BOLOÑES">BICHON BOLOÑES</option>
            <option value="VOLPINO ITALIANO">VOLPINO ITALIANO</option>
            <option value="PEKINES">PEKINES</option>
            <option value="CARLINO">CARLINO</option>
            <option value="SHIH TZU">SHIH TZU</option>
            <option value="PERRO CRESTADO CHINO">PERRO CRESTADO CHINO</option>
            <option value="TIBETAN SPANIEL">TIBETAN SPANIEL</option>
            <option value="TERRIER DEL TIBET">TERRIER DEL TIBET</option>
            <option value="LHASA APSO">LHASA APSO</option>
            <option value="CHIN">CHIN</option>
            <option value="SPITZ JAPONES">SPITZ JAPONES</option>
            <option value="BICHON MALTES">BICHON MALTES</option>
            <option value="BICHON A POIL FRISE">BICHON A POIL FRISE</option>
            <option value="BASENJI">BASENJI</option>
            <option value="COTON DE TULEAR">COTON DE TULEAR</option>
            <option value="COCKER SPANIEL AMERICANO">COCKER SPANIEL AMERICANO</option>
            <option value="CHESAPEAKE BAY RETRIEVER">CHESAPEAKE BAY RETRIEVER</option>
            <option value="CLUMBER SPANIEL">CLUMBER SPANIEL</option>
            <option value="COCKER SPANIEL INGLES">COCKER SPANIEL INGLES</option>
            <option value="RETRIEVER DE PELO RIZADO">RETRIEVER DE PELO RIZADO</option>
            <option value="SETTER INGLES">SETTER INGLES</option>
            <option value="SETTER GORDON">SETTER GORDON</option>
            <option value="ENGLISH SPRINGER SPANIEL">ENGLISH SPRINGER SPANIEL</option>
            <option value="FIELD SPANIEL">FIELD SPANIEL</option>
            <option value="RETRIEVER DE PELO LISO">RETRIEVER DE PELO LISO</option>
            <option value="GOLDON RETRIEVER">GOLDON RETRIEVER</option>
            <option value="LABRADOR RETRIEVER">LABRADOR RETRIEVER</option>
            <option value="POINTER">POINTER</option>
            <option value="WELSH SPRINGER SPANIEL">WELSH SPRINGER SPANIEL</option>
            <option value="SUSSEX SPANIEL">SUSSEX SPANIEL</option>
            <option value="NOVA SCOTIA DUCK TOLLING RETRIEVER">NOVA SCOTIA DUCK TOLLING RETRIEVER</option>
            <option value="GAMMEL DANSK HONSEHUND">GAMMEL DANSK HONSEHUND</option>
            <option value="DEUTSCHER WACHTELHUND">DEUTSCHER WACHTELHUND</option>
            <option value="WEIMARANER">WEIMARANER</option>
            <option value="DEUTSCH DRAHTHAAR">DEUTSCH DRAHTHAAR</option>
            <option value="KLEINER MUNSTERLANDER VORSTEHHUND">KLEINER MUNSTERLANDER VORSTEHHUND</option>
            <option value="GROSSER MUNSTERLANDER VORSTEHHUND">GROSSER MUNSTERLANDER VORSTEHHUND</option>
            <option value="DRENTSCHE PARTIJSHOND">DRENTSCHE PARTIJSHOND</option>
            <option value="PEQUEÑO PERRO HOLANDES DE CAZA ACUATICA">PEQUEÑO PERRO HOLANDES DE CAZA ACUATICA</option>
            <option value="STABYHOUN">STABYHOUN</option>
            <option value="PERRO DE AGUA FRISON">PERRO DE AGUA FRISON</option>
            <option value="PERRO DE AGUA IRLANDES">PERRO DE AGUA IRLANDES</option>
            <option value="SETTER IRLANDES ROJO Y BLANCO">SETTER IRLANDES ROJO Y BLANCO</option>
            <option value="SETTER IRLANDES">SETTER IRLANDES</option>
            <option value="BRAQUE SAINT GERMAIN">BRAQUE SAINT GERMAIN</option>
            <option value="BRAQUE FRANCAIS TYPE GASCOGNE">BRAQUE FRANCAIS TYPE GASCOGNE</option>
            <option value="BRAQUE D’AUVERGNE">BRAQUE D’AUVERGNE</option>
            <option value="BRAQUE DU BOURBONNAIS">BRAQUE DU BOURBONNAIS</option>
            <option value="EPAGNEUL FRANCAIS">EPAGNEUL FRANCAIS</option>
            <option value="EPAGNEUL PICARD ">EPAGNEUL PICARD </option>
            <option value="EPAGNEUL BRETON">EPAGNEUL BRETON</option>
            <option value="EPAGNEUL DE PONT-AUDEMER">EPAGNEUL DE PONT-AUDEMER</option>
            <option value="GRIFON A POIL LAINBUX">GRIFON A POIL LAINBUX</option>
            <option value="EPAGNEUL BLEU DE PICARDIE">EPAGNEUL BLEU DE PICARDIE</option>
            <option value="GRIFON DE PELO DURO">GRIFON DE PELO DURO</option>
            <option value="CZESKY FOUSEK">CZESKY FOUSEK</option>
            <option value="BRACO HUNGARO DE PELO CORTO">BRACO HUNGARO DE PELO CORTO</option>
            <option value="BRACO HUNGARO DE PELO DURO">BRACO HUNGARO DE PELO DURO</option>
            <option value="SPINONE ITALIANO">SPINONE ITALIANO</option>
            <option value="BRACO ITALIANO">BRACO ITALIANO</option>
            <option value="PERDIGUERO DE BURGOS">PERDIGUERO DE BURGOS</option>
            <option value="PERRO DE AGUA PORTUGUES">PERRO DE AGUA PORTUGUES</option>
            <option value="PERDIGUERO PORTUGUES">PERDIGUERO PORTUGUES</option>
            <option value="AUSTRALIAN SHEPHERD">AUSTRALIAN SHEPHERD</option>
            <option value="BEARDER COLLIE">BEARDER COLLIE</option>
            <option value="BORDER COLLIE">BORDER COLLIE</option>
            <option value="EANCASHIRE HEELER">EANCASHIRE HEELER</option>
            <option value="COLLIE DE PERRO LARGO (ROUGH COLLIE)">COLLIE DE PERRO LARGO (ROUGH COLLIE)</option>
            <option value="COLLIE DE PELO CORTO">COLLIE DE PELO CORTO</option>
            <option value="PERRO PASTOR DE LAS SHETLAND">PERRO PASTOR DE LAS SHETLAND</option>
            <option value="ANTIGUO PERRO DE PASTOR INGLES">ANTIGUO PERRO DE PASTOR INGLES</option>
            <option value="WELSH CORGI CARDIGAN">WELSH CORGI CARDIGAN</option>
            <option value="WELSH CORDI PEMBROKE">WELSH CORDI PEMBROKE</option>
            <option value="BOYERO DE AUSTRALIA">BOYERO DE AUSTRALIA</option>
            <option value="KELPIE">KELPIE</option>
            <option value="PERRO FINLANDES DE LAPONIA">PERRO FINLANDES DE LAPONIA</option>
            <option value="PASTOR FINLANDES DE LAPONIA">PASTOR FINLANDES DE LAPONIA</option>
            <option value="PASTOR DE BEAUCE">PASTOR DE BEAUCE</option>
            <option value="PERRO PASTOR DE BRIE">PERRO PASTOR DE BRIE</option>
            <option value="PASTOR DE PICARDIA">PASTOR DE PICARDIA</option>
            <option value="PERRO PASTOR ALEMAN">PERRO PASTOR ALEMAN</option>
            <option value="HOVAWART">HOVAWART</option>
            <option value="SCHNAUZER GIGANTE">SCHNAUZER GIGANTE</option>
            <option value="PERRO PASTOR POLACO DE LA LLANURA">PERRO PASTOR POLACO DE LA LLANURA</option>
            <option value="SCHAPENDOES">SCHAPENDOES</option>
            <option value="PERRO PASTOR HOLANDES">PERRO PASTOR HOLANDES</option>
            <option value="PERRO LOBO DE SAARLOOS">PERRO LOBO DE SAARLOOS</option>
            <option value="PASTOR BELGA GROENENDAL">PASTOR BELGA GROENENDAL</option>
            <option value="PASTOR BELGA LAEKENOIS">PASTOR BELGA LAEKENOIS</option>
            <option value="PASTOR BELGA TERVUEREN">PASTOR BELGA TERVUEREN</option>
            <option value="PASTOR BELGA MALINOIS">PASTOR BELGA MALINOIS</option>
            <option value="BOYERO DE FLANDES">BOYERO DE FLANDES</option>
            <option value="VALLHUND SUECO">VALLHUND SUECO</option>
            <option value="PERRO DE PASTOR DE ISLANDIA">PERRO DE PASTOR DE ISLANDIA</option>
            <option value="PULI">PULI</option>
            <option value="PUMI">PUMI</option>
            <option value="PERRO PASTOR DE KARST">PERRO PASTOR DE KARST</option>
            <option value="SARPLANINAC">SARPLANINAC</option>
            <option value="PASTOR BERGAMASCO">PASTOR BERGAMASCO</option>
            <option value="GOS D´ATADURA CATALA">GOS D´ATADURA CATALA</option>
            <option value="CAO SERRA DE AIRES">CAO SERRA DE AIRES</option>
            <option value="CATAHOULA LEOPARD DOG">CATAHOULA LEOPARD DOG</option>
            <option value="PLOTT HOUND">PLOTT HOUND</option>
            <option value="BLUETICK COONHOUND">BLUETICK COONHOUND</option>
            <option value="REDBONE COONHOUND">REDBONE COONHOUND</option>
            <option value="BLACK AND TAN COONHOUND">BLACK AND TAN COONHOUND</option>
            <option value="TREEING WALKER COONHOUND">TREEING WALKER COONHOUND</option>
            <option value="AMERICAN FOXHOUND">AMERICAN FOXHOUND</option>
            <option value="BASSET HOUND">BASSET HOUND</option>
            <option value="BEAGLE">BEAGLE</option>
            <option value="FOXHOUND">FOXHOUND</option>
            <option value="DEERHOUND">DEERHOUND</option>
            <option value="PERRO DE NUTRIA">PERRO DE NUTRIA</option>
            <option value="GREYHOUND">GREYHOUND</option>
            <option value="WHIPPET">WHIPPET</option>
            <option value="HARRIER">HARRIER</option>
            <option value="DUNKER">DUNKER</option>
            <option value="HALDENSTOVARE">HALDENSTOVARE</option>
            <option value="HYGENHUND">HYGENHUND</option>
            <option value="SUOMENAJOKOIRA">SUOMENAJOKOIRA</option>
            <option value="DREVER">DREVER</option>
            <option value="SCHILLER STOVARE">SCHILLER STOVARE</option>
            <option value="HAMILTON STOVARE">HAMILTON STOVARE</option>
            <option value="SMALANDSSTOVARE">SMALANDSSTOVARE</option>
            <option value="TECKEL ENANO">TECKEL ENANO</option>
            <option value="SABUESO SE SANGRE DE HANNOVER">SABUESO SE SANGRE DE HANNOVER</option>
            <option value="SABUESO DE SANGRE DE BAVIERA">SABUESO DE SANGRE DE BAVIERA</option>
            <option value="OGAR POLSKI">OGAR POLSKI</option>
            <option value="IRISH WOLFHOUND">IRISH WOLFHOUND</option>
            <option value="KERRY BEAGLE">KERRY BEAGLE</option>
            <option value="LURCHER">LURCHER</option>
            <option value="SABUESO DE SAN HUBERTO">SABUESO DE SAN HUBERTO</option>
            <option value="BILLY">BILLY</option>
            <option value="BASSET FAUVE DE BRETAGNE">BASSET FAUVE DE BRETAGNE</option>
            <option value="GRAND BLEU DE GASCOGNE">GRAND BLEU DE GASCOGNE</option>
            <option value="CHIEN D’ARTOIS">CHIEN D’ARTOIS</option>
            <option value="BASSET BLEU DE GASCOGNE">BASSET BLEU DE GASCOGNE</option>
            <option value="BASSET ARTESIEN NORMAND">BASSET ARTESIEN NORMAND</option>
            <option value="GRAND GASCON SAINTONGEOIS">GRAND GASCON SAINTONGEOIS</option>
            <option value="GRAND BASSET GRIFFON VENDEEN">GRAND BASSET GRIFFON VENDEEN</option>
            <option value="GRAND GRIFFON VENDEEN">GRAND GRIFFON VENDEEN</option>
            <option value="BRIQUET GRIFFON VENDEEN">BRIQUET GRIFFON VENDEEN</option>
            <option value="GRIFFON NIVERNAIS">GRIFFON NIVERNAIS</option>
            <option value="PETIT BLEU DE GASCOGNE">PETIT BLEU DE GASCOGNE</option>
            <option value="GRIFFON BLEU DE GASCOGNE">GRIFFON BLEU DE GASCOGNE</option>
            <option value="ANGLO-FRANCAIS DE PETITE VENERIE">ANGLO-FRANCAIS DE PETITE VENERIE</option>
            <option value="GRIFFON FAUVE DE BRETAGNE">GRIFFON FAUVE DE BRETAGNE</option>
            <option value="PORCELAINE">PORCELAINE</option>
            <option value="JURA LAUFHUND: TIPO BRUNO">JURA LAUFHUND: TIPO BRUNO</option>
            <option value="JURA LAUFHUND: TIPO SAN HUBERTO">JURA LAUFHUND: TIPO SAN HUBERTO</option>
            <option value="MAGYAR AGAR">MAGYAR AGAR</option>
            <option value="BERNER LAUFHUND">BERNER LAUFHUND</option>
            <option value="SCHWYZER LAUFHUND">SCHWYZER LAUFHUND</option>
            <option value="LUZERNER LAUFHUND">LUZERNER LAUFHUND</option>
            <option value="SABUESO DE LOS BALCANES">SABUESO DE LOS BALCANES</option>
            <option value="SABUESO DE POSAVATZ">SABUESO DE POSAVATZ</option>
            <option value="SABUESO YUGOSLAVO DE MONTAÑA">SABUESO YUGOSLAVO DE MONTAÑA</option>
            <option value="SABUESO TRICOLOR YUGOSLAVO">SABUESO TRICOLOR YUGOSLAVO</option>
            <option value="SABUESO ITALIANO">SABUESO ITALIANO</option>
            <option value="CIRNECO DELLÉTNA">CIRNECO DELLÉTNA</option>
            <option value="PERRO DE LOS FARAONES">PERRO DE LOS FARAONES</option>
            <option value="PODENCO IBICENCIO">PODENCO IBICENCIO</option>
            <option value="SABUESO ESPAÑOL ">SABUESO ESPAÑOL </option>
            <option value="GALGO ESPAÑOL">GALGO ESPAÑOL</option>
            <option value="PODENCO PORTUGUES PEQUEÑO">PODENCO PORTUGUES PEQUEÑO</option>
            <option value="PODENCO PORTUGUES MEDIO">PODENCO PORTUGUES MEDIO</option>
            <option value="SALUKI">SALUKI</option>
            <option value="BARZOI">BARZOI</option>
            <option value="AZAWARH">AZAWARH</option>
            <option value="GALGO AFGANO">GALGO AFGANO</option>
            <option value="SLOUGHI">SLOUGHI</option>
            <option value="KAI">KAI</option>
            <option value="RHODESIAN RIDGEBACK">RHODESIAN RIDGEBACK</option>
            <option value="AMERICAN STAFFORDSHIRE TERRIER">AMERICAN STAFFORDSHIRE TERRIER</option>
            <option value="BOSTON TERRIER">BOSTON TERRIER</option>
            <option value="AIREDALE TERRIER">AIREDALE TERRIER</option>
            <option value="BEDLINGTON TERRIER">BEDLINGTON TERRIER</option>
            <option value="TOY TERRIER NEGRO Y FUEGO">TOY TERRIER NEGRO Y FUEGO</option>
            <option value="MANCHESTER TERRIER">MANCHESTER TERRIER</option>
            <option value="BORDER TERRIER">BORDER TERRIER</option>
            <option value="NORWICH TERRIER">NORWICH TERRIER</option>
            <option value="ENGLISH BULL TERRIER MINIATURA">ENGLISH BULL TERRIER MINIATURA</option>
            <option value="STAFFORDSHIRE BULL TERRIER">STAFFORDSHIRE BULL TERRIER</option>
            <option value="DANDIE DINMONT TERRIER">DANDIE DINMONT TERRIER</option>
            <option value="CAIRN TERRIER">CAIRN TERRIER</option>
            <option value="LAKELAND TERRIER">LAKELAND TERRIER</option>
            <option value="NORFOLK TERRIER">NORFOLK TERRIER</option>
            <option value="JACK RUSSEL TERRIER">JACK RUSSEL TERRIER</option>
            <option value="FOX TERRIER DE PELO DURO">FOX TERRIER DE PELO DURO</option>
            <option value="FOX TERRIER DE PELO RISO">FOX TERRIER DE PELO RISO</option>
            <option value="WELSH TERRIER">WELSH TERRIER</option>
            <option value="SCOTTISH TERRIER">SCOTTISH TERRIER</option>
            <option value="SKYE TERRIER">SKYE TERRIER</option>
            <option value="FELL TERRIER">FELL TERRIER</option>
            <option value="WEST HIGHLAND WHITE TERRIER">WEST HIGHLAND WHITE TERRIER</option>
            <option value="YORKSHIRE TERRIER">YORKSHIRE TERRIER</option>
            <option value="SEALYHAM TERRIER">SEALYHAM TERRIER</option>
            <option value="TERRIER AUSTRALIANO">TERRIER AUSTRALIANO</option>
            <option value="SILKY TERRIER">SILKY TERRIER</option>
            <option value="TERRIER ALEMAN">TERRIER ALEMAN</option>
            <option value="PINSCHER">PINSCHER</option>
            <option value="AFFENPINSHER">AFFENPINSHER</option>
            <option value="PINSCHER ENANO">PINSCHER ENANO</option>
            <option value="SCHAUZER MINIATURA">SCHAUZER MINIATURA</option>
            <option value="KROMFOHRLANDER">KROMFOHRLANDER</option>
            <option value="IRISH TERRIER">IRISH TERRIER</option>
            <option value="SOFT-COATED WHEATEN TERRIER">SOFT-COATED WHEATEN TERRIER</option>
            <option value="GLEN OF IMAAL TERRIER">GLEN OF IMAAL TERRIER</option>
            <option value="KERRY BLUB TERRIER">KERRY BLUB TERRIER</option>
            <option value="GRIFFON BRUXELLOIS">GRIFFON BRUXELLOIS</option>
            <option value="PINSCHER AUSTRIACO DE PELO CORTO">PINSCHER AUSTRIACO DE PELO CORTO</option>
            <option value="CESKY TERRIER">CESKY TERRIER</option>
            <option value="AMERICAN BULLDOG">AMERICAN BULLDOG</option>
            <option value="OLDE ENGLISH BULLDOGGE">OLDE ENGLISH BULLDOGGE</option>
            <option value="CHINOOK">CHINOOK</option>
            <option value="CAROLINA DOG">CAROLINA DOG</option>
            <option value="ALASKAN MALAMUTE">ALASKAN MALAMUTE</option>
            <option value="MASTIFF INGLES">MASTIFF INGLES</option>
            <option value="TERRANOVA">TERRANOVA</option>
            <option value="DOGO ARGENTINO">DOGO ARGENTINO</option>
            <option value="FILA BRASILERO">FILA BRASILERO</option>
            <option value="GRONLANDHUND">GRONLANDHUND</option>
            <option value="NORSK ELGHUND GRIS">NORSK ELGHUND GRIS</option>
            <option value="NORSK ELGHUND NEGRO">NORSK ELGHUND NEGRO</option>
            <option value="NORSK LUNDEHUND">NORSK LUNDEHUND</option>
            <option value="NORSK BUHUND">NORSK BUHUND</option>
            <option value="SPITZ FINLANDES">SPITZ FINLANDES</option>
            <option value="PERRO DE OSO DE CARELIA">PERRO DE OSO DE CARELIA</option>
            <option value="JAMTHUND">JAMTHUND</option>
            <option value="PERRO SUECO DE LAPONIA">PERRO SUECO DE LAPONIA</option>
            <option value="NORIBOTTENSPETS">NORIBOTTENSPETS</option>
            <option value="DOBERMANN">DOBERMANN</option>
            <option value="DOGO ALEMAN">DOGO ALEMAN</option>
            <option value="CANICHE MEDIANO">CANICHE MEDIANO</option>
            <option value="DBUTSCHER BOXER">DBUTSCHER BOXER</option>
            <option value="EURASIER">EURASIER</option>
            <option value="LANDSEER">LANDSEER</option>
            <option value="LEONBERGER">LEONBERGER</option>
            <option value="ROTTWEILER">ROTTWEILER</option>
            <option value="PERRO PASTOR POLACO DE PODHALE">PERRO PASTOR POLACO DE PODHALE</option>
            <option value="SCHIPPERKE">SCHIPPERKE</option>
            <option value="BOULEDOGUE FRANCAIS">BOULEDOGUE FRANCAIS</option>
            <option value="DOGO DE BURDEOS">DOGO DE BURDEOS</option>
            <option value="PERRO DE MONTAÑA DE LOS PIRINEOS">PERRO DE MONTAÑA DE LOS PIRINEOS</option>
            <option value="KOMONDOR">KOMONDOR</option>
            <option value="KUVASZ">KUVASZ</option>
            <option value="MUDI">MUDI</option>
            <option value="APPENZELLER SENNENHUND">APPENZELLER SENNENHUND</option>
            <option value="ENTLEBUCHER SENNENHUND">ENTLEBUCHER SENNENHUND</option>
            <option value="BERNER SENNENHUND">BERNER SENNENHUND</option>
            <option value="GROSSER SCHWEIZER SENNENHUND">GROSSER SCHWEIZER SENNENHUND</option>
            <option value="SAN BERNARDO">SAN BERNARDO</option>
            <option value="DALMATA">DALMATA</option>
            <option value="CANE DE PASTORE MAREMMANO-ABRUZZESE">CANE DE PASTORE MAREMMANO-ABRUZZESE</option>
            <option value="MASTIN NAPOLITANO">MASTIN NAPOLITANO</option>
            <option value="MASTIN DE LOS PIRINEOS">MASTIN DE LOS PIRINEOS</option>
            <option value="MASTIN ESPAÑOL">MASTIN ESPAÑOL</option>
            <option value="CA DE BESTIAR">CA DE BESTIAR</option>
            <option value="PERRO DE PRESA MALLORQUIN">PERRO DE PRESA MALLORQUIN</option>
            <option value="CANAAN DOG">CANAAN DOG</option>
            <option value="CAO DE SERRA DE ESTRELLA">CAO DE SERRA DE ESTRELLA</option>
            <option value="RAFEIRO DO ALENTEJO">RAFEIRO DO ALENTEJO</option>
            <option value="CAO DE CASTRO LABOREIRO">CAO DE CASTRO LABOREIRO</option>
            <option value="LAIKA RUSO-EUROPEO">LAIKA RUSO-EUROPEO</option>
            <option value="LAIKA DE SIBERIA ORIENTAL">LAIKA DE SIBERIA ORIENTAL</option>
            <option value="LAIKA DE SIBERIA OCCIDENTAL">LAIKA DE SIBERIA OCCIDENTAL</option>
            <option value="SIBERIAN HUSKY">SIBERIAN HUSKY</option>
            <option value="SAMOYEDO">SAMOYEDO</option>
            <option value="CHOW CHOW">CHOW CHOW</option>
            <option value="SHAR PET">SHAR PET</option>
            <option value="AKITA">AKITA</option>
            <option value="SHIBA">SHIBA</option>
            <option value="TOSA">TOSA</option>
            <option value="TERRIER JAPONES">TERRIER JAPONES</option>
            <option value="HOKKAIDO">HOKKAIDO</option>
            <option value="DOGO DEL TIBET">DOGO DEL TIBET</option>
            <option value="PERRO DE PRESA CANARIO">PERRO DE PRESA CANARIO</option>
            <option value="AIDI">AIDI</option>
            <option value="NEW GUINEA SINGING DOG">NEW GUINEA SINGING DOG</option>
                                    



        </datalist>
        `
    }
});
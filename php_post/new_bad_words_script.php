<?php

if (isset($_POST['my_sentence'])) {

	// the following segment is by Jozef Jaroščiak: https://www.linkedin.com/in/jozefj
	function addStars($word) {
	$length = strlen($word);
	return substr($word, 0, 1) . str_repeat("*", $length - 2) . substr($word, $length - 1, 1);
	}
	function ReplaceBadWords($comment){
	$wordlist = "@$$,13?,2 girls 1 cup,2g1c,3p,4r5e,5h1t,5hit,a_s_s,a55,aardappels afgieteng,aborto,achter het 

	raam 

	zitten,acrotomophilia,afberen,aflebberen,afrossen,afrukken,aftrekken,afwerkplaats,afzeiken,afzui

	gen,ahole,allumé,allumée,allupato,amador,amcik,ammucchiata,anal,anale,analritter,anderhalve man 

	en een 

	paardekop,andskota,anilingus,anita,anus,ânus,ar5e,aranha,ariano,arrapato,arrse,arrusa,arruso,ars

	ch,arschficker,arschlecker,arschloch,arse,arsehole,asbak,Asesinato,ash0le,ash0les,asholes,asno,a

	so,Ass Monkey,assatanato,asses,Assface,assfucker,ass-

	fucker,assfukka,assh0le,assh0lez,asshole,assholes,assholz,assmunch,assrammer,asswhole,asswipe,au

	to erotic,autoerotic,ayir,azzhole,b!+ch,b!tch,b00b,b00bs,b17ch,b1tch,babeland,baby 

	batter,bagascia,bagger schijten,bagnarsi,baiser,balalao,baldracca,balen,ball gag,ball gravy,ball 

	kicking,ball licking,ball sack,ball 

	sucking,ballbag,balle,balls,ballsack,bander,bangbros,bareback,barely 

	legal,barenaked,bassterds,bastard,bastardo,bastards,bastardz,basterds,basterdz,bastinado,battere

	,battona,bbw,bdsm,beastial,beastiality,beaver cleaver,beaver 

	lips,bedonderen,befborstelg,beffen,bekken,belazeren,belino,bellend,besodemieterd 

	zijn,besodemieteren,bestial,bestiality,beurt,bi curious,bi+ch,bi7ch,Biatch,bicha,big black,big 

	breasts,big knockers,big 

	tits,biga,bigornette,bimbos,birdlock,biscate,bissexual,bitch,bitcher,bitchers,bitches,bitchin,bi

	tching,bite,bitte,black cock,bloblos,blonde action,blonde on blonde action,bloody,blow j,Blow 

	Job,blow your l,blowjob,blowjobs,blue 

	waffle,blumpkin,bocchinara,bocchino,boceta,boemelen,boerelul,boerenpummelg,boffing,bofilo,boiata

	,boiolas,bokkelul,Bollera,bollock,bollocks,bollok,bondage,boner,boob,boobs,booobs,boooobs,booooo

	bs,booooooobs,booty 

	call,bordel,bordello,bosser,bosta,botergeil,bourré,bourrée,branlage,branler,branlette,branleur,b

	ranleuse,bratze,braulio de borracha,breasts,brinca,broekhoesten,brouter le cresson,brown 

	showers,brugpieperg,brunette action,bucaiolo,buceta,budiùlo,buffelen,bugger,buiten de pot 

	piesen,bukkake,bulldyke,bullet vibe,bum,bumbum,bumsen,bung hole,bunghole,bunny fucker,buona 

	donna,burro,busone,busty,butt,buttcheeks,butthole,buttmuch,butt-

	pirate,buttplug,buttwipe,bychara,byk,c0ck,c0cks,c0cksucker,c0k,cabrao,cabron,Cabrón,Caca,cacca,c

	accati in mano e prenditi a 

	schiaffi,cacete,caciocappella,cadavere,cagar,cagare,cagata,cagna,cailler,camel 

	toe,camgirl,camisinha,cammello,camslut,camwhore,cappella,caralho,carciofo,carità,carpet 

	muncher,carpetmuncher,casci,cawk,cawks,cazzata,cazzimma,cazzo,cerveja,chatte,checca,chernozhopyi

	,chiappa,chiasse,chiavare,chiavata,chier,chink,chiottes,chochota,chocolate 

	rosebuds,chraa,chuj,Chupada,Chupapollas,chupar,Chupetón,ciospo,cipa,circlejerk,cirer,ciucciami 

	il cazzo,cl1t,cleveland steamer,clit,clito,clitoris,clits,clover 

	clamps,clusterfuck,cnts,cntz,cnut,cocaína,cock,cockface,cockhead,cock-

	head,cockmunch,cockmuncher,cocks,cocksuck ,cocksucked ,CockSucker,cock-

	sucker,cocksucking,cocksucks 

	,cocksuka,cocksukka,coglione,coglioni,cok,cokmuncher,coksucka,colhoes,comer,cona,concha,Conc

	ha de tu 

	madre,connard,connasse,conne,Coño,consolo,coon,Coprofagía,coprolagnia,coprophilia,cornhole,corno

	,cornuto,couilles,cox,cozza,cramouille,crap,cu,cul,culattina,culattone,Culo,cum,cummer,cumming,c

	ums,cumshot,cunilingus,cunillingus,cunnilingus,cunt,cuntlick ,cuntlicker ,cuntlicking 

	,cunts,cuntz,cyalis,cyberfuc,cyberfuck ,cyberfucked ,cyberfucker,cyberfuckers,cyberfucking 

	,d1ck,d4mn,damn,dar o rabo,darkie,da's kloten van de bok,date rape,daterape,daygo,de ballen,de 

	hoer spelen,de hond uitlaten,de koffer induiken,de pijp aan maarten geven,de pijp 

	uitgaan,déconne,déconner,deep throat,deepthroat,dego,delg,di 

	merda,dick,dickhead,dike,dild0,dild0s,dildo,dildos,dilld0,dilld0s,dink,dinks,dirsa,dirty 

	pillows,dirty sanchez,ditalino,dlck,dödel,dog style,dog-fucker,doggie 

	style,doggiestyle,doggin,dogging,doggy 

	style,doggystyle,dolboy'eb,dolcett,dombo,domination,dominatricks,dominatrics,dominatrix,dommes,d

	onkey punch,donkeyribber,doosh,double dong,double penetration,doudounes,dp 

	action,draaikontg,drague,driehoog achter wonen,Drogas,drolg,drooggeiler,droogkloot,duche,dum 

	raio,dupa,duro,dyke,dziwka,eat my ass,ebalnik,ebalo,ebalom sch'elkat,ecchi,een beurt geven,een 

	nummertje maken,een wip maken,eikel,ejackulate,ejaculate,ejaculated,ejaculates ,ejaculating 

	,ejaculatings,ejaculation,ejakulate,Ekrem,Ekto,emmerdant,emmerder,emmerdeur,emmerdeuse,enculé,en

	culée,enculer,enema,enfoiré,enfoirée,engerd,erotic,erotism,escort,Esperma,esporra,ethical 

	slut,étron,eunuch,f u c k,f u c k e 

	r,f_u_c_k,f4nny,faen,fag,fag1t,faget,fagg1t,fagging,faggit,faggitt,faggot,faggs,fagit,fagot,fago

	ts,fags,fagz,faig,faigs,fanculo,fanny,fannyflaps,fannyfucker,fanyy,fare 

	unaŠ,fart,fatass,fava,fcuk,fcuker,fcuking,fecal,feces,feck,fecker,feg,felch,Felcher,felching,fel

	late,fellatio,feltch,female squirting,femdom,femminuccia,fica,fick,ficken,Fiesta de 

	salchichas,figa,figging,figlio di buona donna,figlio di puttana,figone,filho da puta,fille de 

	pute,fils de pute,fingerfuck ,fingerfucked ,fingerfucker ,fingerfuckers,fingerfucking 

	,fingerfucks ,fingering,finocchio,fistfuck,fistfucked ,fistfucker ,fistfuckers ,fistfucking 

	,fistfuckings ,fistfucks ,fisting,fitt,flamoes,flange,flic,flikken,Flikker,flipping the 

	bird,flittchen,foda,foda-se,foder,Follador,Follar,folle,fook,fooker,foot 

	fetish,footjob,foreskin,fottere,fottersi,Fotze,foutre,fracicone,frango 

	assado,fratze,fregna,frocio,froscio,frotting,Fu(,fuck,fuck 

	buttons,fucka,fucked,fucker,fuckers,fuckhead,fuckheads,fuckin,fucking,fuckings,fuckingshitmother

	fucker,fuckme ,fucks,fuckwhit,fuckwit,fudge 

	packer,fudgepacker,fuk,Fukah,Fuken,fuker,Fukin,Fukk,Fukkah,Fukken,Fukker,Fukkin,fuks,fukwhit,fuk

	wit,fuori come un balcone,futanari,futkretzn,fux,fux0r,g ????,g00k,gadverdamme,galbak,gang 

	bang,gangbang,gangbanged ,gangbangs ,gat,gay,gay 

	sex,gayboy,gaygirl,gaylord,gays,gaysex,gayz,gedoogzone,geil,geilneef,genitals,gerber,gesodemiete

	r,giant cock,Gilipichis,Gilipollas,girl on,girl on top,girls gone wild,goatcx,goatse,God,god-

	dam,goddamn,goddamned,God-damned,godverdomme,gokkun,gol,golden shower,goldone,goo 

	girl,goodpoop,gook,goregasm,gouine,gozar,graftak,grande folle,gras 

	maaien,gratenkutg,grelho,greppeldel,griet,grilletto,grogniasse,grope,group sex,g-

	spot,guanto,guardone,gueule,guiena,guro,h00r,h0ar,h0r,h0re,h4x0r,Hacer una paja,Haciendo el 

	amor,hackfresse,hand job,handjob,hard core,hardcore,hardcoresex 

	,hell,hells,helvete,hentai,Heroína,heshe,heterosexual,Hija de puta,Hijaputa,Hijo de 

	puta,Hijoputa,hoar,hoare,hoempert,hoer,hoerenbuurt,hoerenloper,hoerig,hol,homem 

	gay,homo,homoerotic,homoerótico,homosexual,honkey,hooker,hoor,hoore,hore,horniest,horny,hot 

	chick,hotsex,how to kill,how to murder,Huevon,hufter,huge 

	fat,hui,huisdealer,humping,hupen,hure,hurensohn,Idiota,Imbécil,incazzarsi,incest,incoglionirsi,i

	nferno,infierno,ingoio,injun,intercourse,ische,jack off,jackoff,jack-off ,jail 

	bait,jailbait,jap,japs,jerk off,jerk-off,jerk-off 

	,jigaboo,jiggaboo,jiggerboo,Jilipollas,jisim,jism,jiss,jiz ,jizm,jizm 

	,jizz,johny,jouir,juggs,kackbratze,kacke,kacken,kampflesbe,kanen,kanker,Kapullo,kawk,kettingzeug

	g,kike,kimme,kinbaku,kinkster,kinky,klaarkomen,klerebeer,klojo,klooien,klootjesvolk,klootoog,klo

	otzak,kloten,knackwurst,knob,knobbing,knobead,knobed,knobend,knobhead,knobjocky,knobjokey,knobs,

	knobz,knor,knulle,kock,kondum,kondums,kontg,kontneuken,kraut,krentekakker,kuk,kuksuger,kum,kumme

	r,kumming,kums,kunilingus,kunt,kunts,kuntz,Kurac,kurwa,kusi,kut,kuttelikkertje,kwakkieg,kyrpa,l3

	i+ch,l3itch,la putain de ta mère,labia,Lameculos,l'arte bolognese,latte,leather 

	restraint,leather straight jacket,leccaculo,lecchino,lemon 

	party,Lesbian,lésbica,lesbo,Lezzian,liefdesgrot,Lipshits,Lipshitz,lmfao,lofare,loffa,loffare,lol

	ita,lovemaking,lul,lul-de-

	behanger,lulhannes,lumaca,lummel,lümmel,lust,lusting,m0f0,m0fo,m45terbate,ma5terb8,ma5terbate,Ma

	ciza,Macizorra,mafketel,make me come,maldito,male 

	squirting,MALPT,mama,Mamada,mamhoon,manico,mannaggia,maquereau,Marica,Maricón,maricon,Mariconazo

	,martillo,masochist,masokist,massterbait,masstrbait,masstrbate,masterb8,masterbaiter,masterbat,m

	asterbat3,masterbate,master-

	bate,masterbates,masterbation,masterbations,masturbat,masturbate,matennaaierg,matje,melon,menage 

	a trois,ménage a 

	trois,merd,merda,merdata,merde,merdeuse,merdeux,merdoso,merlan,meuf,mibun,Mierda,mignotta,milcht

	üten,milf,minchia,minchione,missionary position,mof,mof0,mofo,mo-

	fo,mona,monkleigh,monta,montare,möpse,morgenlatte,morue,möse,Motha Fucker,Motha Fuker,Motha 

	Fukkah,Motha Fukker,mothafuck,mothafucka,mothafuckas,mothafuckaz,mothafucked 

	,mothafucker,mothafuckers,mothafuckin,mothafucking ,mothafuckings,mothafucks,Mother 

	Fucker,Mother Fukah,Mother Fuker,Mother Fukkah,Mother 

	Fukker,motherfuck,motherfucked,motherfucker,mother-

	fucker,motherfuckers,motherfuckin,motherfucking,motherfuckings,motherfuckka,motherfucks,moule,mo

	uliewop,mound of venus,mr hands,mucke,mudack,muff,muff 

	diver,muffdiving,mufti,muie,mulkku,muschi,mussa,mutha,Mutha Fucker,Mutha Fukah,Mutha Fuker,Mutha 

	Fukkah,Mutha 

	Fukker,muthafecker,muthafuckker,muther,mutherfucker,mutsg,n1gga,n1gger,n1gr,naaien,naakt,nackt,n

	ambla,nastt,nave 

	scuola,nawashi,nazi,nazis,nègre,negro,neonazi,nepesaurio,nerchia,neuken,neukstier,nicht,nig 

	nog,nigg3r,nigg4h,nigga,niggah,niggas,niggaz,nigger,nigger;,niggers 

	,nigur;,niiger;,niigr;,nimphomania,nippel,nipple,nipples,nique ta mère,nob,nob 

	jokey,nobhead,nobjocky,nobjokey,noune,nsfw 

	images,nude,nudity,nudo,numbnuts,nutsack,nympho,nymphomania,octopussy,oetlul,omorashi,onanieren,

	one cup two girls,one guy one jar,op z'n hondjes,op z'n sodemieter 

	geven,opgeilen,opizdenet,opkankeren,oprotten,opsodemieteren,opzouten,orafis,orgasim 

	,orgasim;,orgasims ,orgasm,orgasms 

	,orgasum,orgy,oriface,orifice,orifiss,Orina,orospu,osto'eblo,ostokhuitel'no,ot'ebis,otmudohat,ot

	pizdit,otsosi,ouwe 

	rukker,ouwehoer,ouwehoeren,p0rn,paal,paardelul,packi,packie,packy,padlo,padulo,paedophile,paki,p

	akie,paky,palen,palle,palloso,palucher,paneleiro,panties,panty,paska,passar um 

	cheque,patacca,patonza,pau,pawn,pecker,pecorina,pédale,pédé,pedik,Pedo,pedobear,pedophile,peeenu

	s,peeenusss,peenus,pegging,peidar,peinus,pen1s,penas,penis,pênis,penis-

	breath,penisfucker,penozeg,penus,penuus,perdet,perse,Pervertido,pesce,péter,petuh,Pezón,phone 

	sex,phonesex,Phuc,Phuck,Phuk,phuked,Phuker,phuking,phukked,Phukker,phukking,phuks,phuq,picheln,p

	icio,picka,pidar gnoinyj,piece of 

	shit,pierdol,piesen,pigfucker,pijpbekkieg,pijpen,pik,pillu,pimmel,pimpern,pimpis,pincare,Pinche,

	pinkeln,pinto,pipa,pipe,pipi,pipì,pippone,pirla,Pis,pisciare,piscio,pisello,piss,piss 

	pig,pissed,pissen,pisser,pissers,pisses ,pissflaps,pissin ,pissing,pissoff 

	,pisspig,pistola,pistolotto,piz`dyulina,pizda,pizdato,pizdatyi,piz'det,pizdetc,pizdoi 

	nakryt'sja,pizd'uk,playboy,pleasure chest,pleurislaaier,po khuy,podi 

	ku'evo,poeben,poep,poepen,poilu,po'imat' na konchik,po'iti posrat,polac,polack,polak,pole 

	smoker,poluchit pizdy,pomiciare,pompa,pompino,ponyplay,poof,Poonani,poontsee,poop 

	chute,poopchute,poot,popel,poppen,porca,porca madonna,porca miseria,porca puttana,porco 

	due,porco zio,porn,porno,pornography,pornos,porra,portiekslet,pososi moyu 

	konfetku,pot,potta,potverdorie,pouffiasse,pousse-

	crotte,pr0n,pr1c,pr1ck,pr1k,preteen,prick,pricks ,prince albert 

	piercing,prissat,proebat,promudobl'adsksya 

	pizdopro'ebina,pron,propezdoloch,prosrat,Prostituta,pthc,pube,pubes,publiciteitsgeil,pula,pule,p

	usse,pussee,pussi,pussies,pussy,pussys ,puta,puta que pariu,puta que te 

	pariu,putain,pute,puto,puttana,puuke,puuker,qahbeh,quaglia,queaf,queca,queef,queer,queers,queerz

	,queue,qweers,qweerz,qweir,raaskallen,Racista,raghead,raging 

	boner,Ramera,ramoner,rape,raping,rapist,raspeezdeyi,raspizdatyi,rautenberg,raz'yebuy,raz'yoba,re

	cchione,recktum,rectum,reet,reet trappen, voor 

	zijn,reetridder,regina,remsporeng,retard,reudig,reutelen,reverse 

	cowgirl,rimjaw,rimjob,rimming,rincoglionire,rizzarsi,rompiballe,rosette,rosy palm,rosy palm and 

	her 5 sisters,rothoer,rotzak,ruffiano,rukhond,rukken,rusty trombone,s & m,s 

	hit,s&m,s.o.b.,s_h_i_t,sacanagem,saco,Sádico,sadism,sadist,salaud,salope,sbattere,sbattersi,sbor

	ra,sborrata,sborrone,sbrodolata,scank,scat,schabracke,schaffer,schatje,scheiss,scheiße,schijt,sc

	hijten,schlampe,schlong,schmuck,schnackeln,schoft,schuinsmarcheerder,scissoring,scopare,scopata,

	scorreggiare,screw,screwing,scroat,scrote,scrotum,s'ebat'sya,sega,semen,serin,service trois 

	pièces,sex,sexo,Sexo oral,sexy,sh!+,Sh!

	t,sh1t,sh1ter,sh1ts,sh1tter,sh1tz,shag,shagger,shaggin,shagging,shalava,sharmuta,sharmute,shaved 

	beaver,shaved pussy,shemale,shi

	+,shibari,shipal,shit,shitdick,shite,shited,shitey,shitfuck,shitfull,shithead,shiting,shitings,s

	hits,shitted,shitter,shitters ,shitting,shittings,Shitty,shitty 

	,Shity,shitz,shiz,shota,shrimping,Shyt,Shyte,Shytty,Shyty,skanck,skank,skankee,skankey,skanks,Sk

	anky,skribz,skurwysyn,slanteye,slempen,sletg,sletterig,slik mijn 

	zaad,slinguare,slinguata,slut,sluts,Slutty,slutz,sm,sm??,smandrappata,smegma,smut,snatch,snolg,s

	nowballing,soccia,socmel,sodomize,sodomy,son-of-a-

	bitch,Soplagaitas,Soplapollas,sorca,spac,spagnola,sphencter,spic,spierdalaj,splooge,spompinare,s

	pooge,spread legs,spuiten,spunk,standje,standje-69g,sticchio,stoephoer,stootje,strap 

	on,strapon,strappado,strip club,strontg,stronza,stronzata,stronzo,styervo,style 

	doggy,suce,suck,sucks,sufferdg,suicide girls,suka,sukin syn,sultry 

	women,sveltina,sverginare,svodit posrat,svoloch,swastika,swinger,t1tt1e5,t1tties,tainted 

	love,tante,tapette,tapijtnek,tarzanello,taste my,tea 

	bagging,teefg,teets,teez,temeier,teringlijer,terrone,testa di cazzo,testical,testicle,Tetas 

	grandes,tette,teuf,threesome,throating,Tía buena,tied up,tight 

	white,tirare,tirer,tit,titfuck,tits,titt,tittchen,titten,tittie5,tittiefucker,titties,titty,titt

	yfuck,tittywank,titwank,toeter,tongue in 

	a,tongzoeng,topa,topless,torneira,tosser,towelhead,trakhat'sya,tranny,transar,Travesti,tribadism

	,trick,trimandoblydskiy 

	pizdoproyob,tringle,tringler,Trio,triootjeg,trique,troia,trombare,trottoir 

	prostituée,trottoirteef,trou du cul,tub 

	girl,tubgirl,turd,turlute,tushy,tw4t,twat,twathead,twatty,twink,twinkie,two girls one 

	cup,twunt,twunter,ubl'yudok,uboy,uccello,u'ebitsche,undressing,upskirt,urethra 

	play,urophilia,utrecht,v pizdu,v14gra,v1gra,va1jina,vacca,vaffanculo,vafl'a,vafli 

	lovit,vag1na,vagiina,vagina,vai tomar no cu,vai-te 

	foder,vaj1na,vajina,vangare,veado,venire,venus mound,Verga,vergallen,verkloten,verneuken,vete a 

	la mierda,veuve,viagra,viande a pneus,vibrador,vibrator,viespeuk,vingeren,violet 

	wand,vittu,vleesroos,vögeln,vollpfosten,voor jan lul,voor jan-met-de-korte-

	achternaam,vorarephilia,voyeur,vullva,vulva,vyperdysh,vzdrochennyi,w00se,w0p,wang,wank,wanker,wa

	nky,watje,welzijnsmafia,wet dream,wetback,wh00r,wh0re,white 

	power,whoar,whore,wichsen,wichser,wijf,willies,willy,wippen,women rapping,wop,wrapping 

	men,wrinkled starfish,wuftje,xana,xochota,xrated,xx,xxx,yaoi,yeb vas,yed,yellow 

	showers,yiffy,zaadje,zabourah,za'ebat,zaebis,zakkenwasser,zalupa,zalupat,zasranetc,zassat,zeiken

	,zeiker,zinne,zio cantante,zlo'ebuchy,zoccola,zoophilia,zuigen,zuiplap";

	// end segment.
		$words = explode(",", $wordlist);
		$comment_to_lower = strtolower($comment);
		$sentence = explode(" ", $comment_to_lower);
		$regular_case_sentence = explode(" ", $comment);
		$insert_sentence_array = array();
		for($i=0; $i<count($sentence); $i++){
			if($sentence[i] == "ass"){
				array_push($insert_sentence_array, str_ireplace("ass", addStars("ass")));
			}
			else {
				array_push($insert_sentence_array, $regular_case_sentence[$i]);
			}
		}
		$comment = implode(" ", $insert_sentence_array);
		$comment_to_lower = strtolower($comment);
		foreach($words as $word){
			if(strpos($comment_to_lower, $word) !== false){
				$comment = str_ireplace($word, addStars($word), $comment);
			}
		}
		$comment = str_ireplace("h**lo", "hello", $comment);
		return $comment;
	}
	$my_sentence = $_POST['my_sentence'];
	echo ReplaceBadWords($my_sentence);
}
	
?>

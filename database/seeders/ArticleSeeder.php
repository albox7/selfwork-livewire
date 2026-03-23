<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

	//	Lanciare nel terminale
	//	php artisan migrate:fresh --seed
	//	per svuotare la tabella e
	//	riempirla di nuovo con i seed

	public function run(): void
	{
		Article::create([
			'title' => 'La nascita delle stelle: fornaci cosmiche nell\'oscurità',
			'article' => 'Le stelle nascono all\'interno di enormi nubi di gas e polvere chiamate nebulose. Sotto l\'effetto della gravità, queste nubi iniziano a collassare su se stesse, concentrando la materia in regioni sempre più dense e calde. Quando la temperatura al centro raggiunge circa dieci milioni di gradi Kelvin, si innescano le reazioni di fusione nucleare: l\'idrogeno si trasforma in elio, liberando quantità colossali di energia sotto forma di luce e calore. È in questo momento che una protostella diventa una vera stella. Il nostro Sole è nato in questo modo circa 4,6 miliardi di anni fa, e continuerà a bruciare per altri cinque miliardi di anni prima di espandersi in una gigante rossa e poi collassare in una nana bianca.',
		]);

		Article::create([
			'title' => 'I buchi neri: dove il tempo si ferma',
			'article' => 'I buchi neri sono tra gli oggetti più affascinanti e misteriosi dell\'universo. Si formano quando una stella massiccia esaurisce il suo combustibile nucleare e collassa sotto il proprio peso gravitazionale. La loro gravità è talmente intensa che nulla, nemmeno la luce, riesce a sfuggire oltre una soglia chiamata orizzonte degli eventi. Al di là di questa frontiera, le leggi della fisica classica smettono di funzionare. Al centro si trova la singolarità, un punto di densità infinita dove le equazioni della relatività generale cessano di essere valide. Nel 2019, il progetto Event Horizon Telescope ha ottenuto la prima immagine di un buco nero supermassiccio al centro della galassia M87, confermando decenni di teorie cosmologiche.',
		]);

		Article::create([
			'title' => 'La Via Lattea: la nostra casa cosmica',
			'article' => 'La Via Lattea è la galassia a spirale barrata che ospita il nostro Sistema Solare. Contiene tra i 200 e i 400 miliardi di stelle, distribuite in un disco di circa 100.000 anni luce di diametro. Il nostro Sole si trova in uno dei bracci a spirale, chiamato Braccio di Orione, a circa 26.000 anni luce dal centro galattico. Al nucleo della Via Lattea risiede un buco nero supermassiccio denominato Sagittario A*, con una massa pari a circa quattro milioni di volte quella del Sole. Osservare la Via Lattea ad occhio nudo, in una notte buia e lontano dall\'inquinamento luminoso, è una delle esperienze più emozionanti che la natura possa offrire.',
		]);

		Article::create([
			'title' => 'Marte: il pianeta rosso e il sogno dell\'esplorazione umana',
			'article' => 'Marte è il quarto pianeta del Sistema Solare e da secoli affascina astronomi e sognatori. Il suo caratteristico colore rosso è dovuto alla presenza di ossido di ferro sulla superficie. Con una giornata di circa 24 ore e 37 minuti, è il pianeta più simile alla Terra in termini di ciclo giorno-notte. Ospita il vulcano più alto del Sistema Solare, l\'Olympus Mons, alto circa 22 chilometri. Numerose missioni robotiche hanno esplorato la sua superficie, rivelando antichi letti di fiumi e possibili tracce di acqua ghiacciata. Agenzie spaziali e aziende private stanno pianificando missioni con equipaggio umano per i prossimi decenni, alimentando il sogno di rendere Marte una seconda casa per l\'umanità.',
		]);

		Article::create([
			'title' => 'Le supernove: morti stellari spettacolari',
			'article' => 'Una supernova è l\'esplosione più potente che avvenga nell\'universo osservabile. Si verifica quando una stella massiccia, al termine della sua vita, collassa improvvisamente e poi rimbalza in un\'esplosione catastrofica che può superare in luminosità l\'intera galassia ospite per settimane. L\'energia rilasciata in pochi secondi equivale a quella che il nostro Sole produrrà nell\'arco di dieci miliardi di anni. Le supernove sono fondamentali per la vita nell\'universo: disperdono nello spazio elementi pesanti come ferro, calcio e ossigeno, forgiati nel nucleo stellare. Letteralmente, siamo fatti della materia di stelle esplose. Senza le supernove, la chimica necessaria alla vita non esisterebbe.',
		]);

		Article::create([
			'title' => 'Gli esopianeti: mondi oltre il nostro Sistema Solare',
			'article' => 'Dal 1995, gli astronomi hanno scoperto oltre 5.500 esopianeti, cioè pianeti orbitanti attorno a stelle diverse dal Sole. Le tecniche principali per rilevarli sono il metodo del transito, che misura il calo di luminosità di una stella quando un pianeta le passa davanti, e il metodo della velocità radiale, che rileva il piccolo oscillamento gravitazionale indotto dal pianeta sulla stella. Alcune di queste scoperte sono straordinarie: pianeti di diamante, mondi oceanici, giganti gassosi che orbitano vicinissimi alla loro stella. La missione Kepler della NASA ha catalogato migliaia di candidati. Il telescopio spaziale James Webb sta ora studiando le atmosfere di alcuni esopianeti, alla ricerca di biosegnature che potrebbero indicare la presenza di vita.',
		]);

		Article::create([
			'title' => 'La Luna: satellite, specchio e motore delle maree',
			'article' => 'La Luna è l\'unico satellite naturale della Terra e l\'unico corpo celeste oltre al nostro pianeta sul quale esseri umani abbiano mai messo piede. Si è formata circa 4,5 miliardi di anni fa, probabilmente in seguito all\'impatto tra la giovane Terra e un corpo planetesimale delle dimensioni di Marte. La sua superficie è costellata di crateri, montagne e vaste pianure laviche dette mari. La Luna esercita una fondamentale influenza gravitazionale sulla Terra: stabilizza l\'inclinazione del suo asse, regola le maree e ha rallentato la rotazione terrestre nel corso dei miliardi di anni. Il programma Artemis della NASA prevede di riportare astronauti sulla Luna entro i prossimi anni, con l\'obiettivo di costruire una presenza permanente nel sistema Terra-Luna.',
		]);

		Article::create([
			'title' => 'Il Big Bang: l\'origine di tutto',
			'article' => 'La teoria del Big Bang descrive l\'origine dell\'universo come un\'espansione a partire da uno stato iniziale di densità e temperatura estreme, circa 13,8 miliardi di anni fa. Nei primissimi istanti, l\'universo era un plasma incandescente composto di quark e gluoni. Con il raffreddamento progressivo, si formarono protoni e neutroni, poi atomi di idrogeno ed elio. Le radiazioni di quel momento primordiale sono ancora visibili oggi sotto forma di radiazione cosmica di fondo a microonde, mappata con precisione dai satelliti COBE e Planck. Il Big Bang non fu un\'esplosione nello spazio, ma un\'espansione dello spazio stesso. La natura di ciò che esisteva prima, o se tale domanda abbia senso, rimane una delle questioni aperte più affascinanti della cosmologia moderna.',
		]);

		Article::create([
			'title' => 'Saturno e i suoi anelli: la meraviglia del Sistema Solare',
			'article' => 'Saturno è il sesto pianeta del Sistema Solare e probabilmente il più visivamente spettacolare. I suoi celebri anelli sono composti di ghiaccio, roccia e polvere cosmica, e si estendono per decine di migliaia di chilometri dal pianeta, pur essendo spessi in media solo poche decine di metri. Saturno è un gigante gassoso con una densità così bassa che galleggerebbe sull\'acqua. Possiede 146 lune confermate, tra cui Titano, che vanta un\'atmosfera densa e laghi di metano liquido, ed Encelado, che espelle geyser di vapore acqueo contenenti composti organici. La missione Cassini-Huygens, terminata nel 2017 con l\'immersione intenzionale nella sua atmosfera, ha rivoluzionato la nostra comprensione di questo pianeta e del suo sistema.',
		]);

		Article::create([
			'title' => 'La materia oscura: l\'invisibile che governa l\'universo',
			'article' => 'Circa il 27% dell\'universo è composto da materia oscura, una forma di materia che non emette, assorbe né riflette luce ma che interagisce attraverso la gravità. La sua esistenza è dedotta dagli effetti gravitazionali che esercita sulla materia visibile: le galassie ruotano in modo incompatibile con la sola massa osservabile, e la luce proveniente da oggetti lontani viene deflessa più del previsto. Nonostante decenni di ricerche, la natura della materia oscura rimane sconosciuta. I candidati più accreditati sono le particelle dette WIMP e gli assioni, ma nessuna è stata ancora rilevata direttamente. Comprendere la materia oscura è una delle grandi sfide della fisica e dell\'astronomia contemporanea, capace di riscrivere la nostra visione dell\'universo.',
		]);

		Article::create([
			'title' => 'Il telescopio James Webb: una nuova finestra sull\'universo',
			'article' => 'Il telescopio spaziale James Webb, lanciato il 25 dicembre 2021 e operativo dall\'estate del 2022, rappresenta la più potente macchina da osservazione astronomica mai costruita dall\'umanità. Con il suo specchio principale da 6,5 metri di diametro e la capacità di osservare nell\'infrarosso, Webb può scrutare le prime galassie formatesi dopo il Big Bang, sbirciare tra le nubi di polvere dove nascono le stelle e analizzare le atmosfere degli esopianeti con precisione senza precedenti. Le prime immagini rilasciate hanno mostrato galassie a distanze cosmologiche mai raggiunte prima. Webb opera al punto L2 di Lagrange, a 1,5 milioni di chilometri dalla Terra, mantenuto a temperature prossime allo zero assoluto per massimizzare la sensibilità ai segnali infrarossi provenienti dai confini dell\'universo osservabile.',
		]);

		Article::create([
			'title' => 'Le pulsar: fari cosmici nella notte galattica',
			'article' => 'Le pulsar sono stelle di neutroni in rapida rotazione che emettono fasci di radiazione elettromagnetica con una regolarità straordinaria, paragonabile a quella dei migliori orologi atomici. Si formano durante l\'esplosione di una supernova, quando il nucleo stellare collassa in una sfera di neutroni densa circa quanto l\'intero Sole ma larga solo 20 chilometri. La prima pulsar fu scoperta nel 1967 dalla studentessa di dottorato Jocelyn Bell Burnell, inizialmente scambiata per un segnale di intelligenza extraterrestre. Alcune pulsar ruotano centinaia di volte al secondo, dette millisecondi pulsar. La loro regolarità le rende strumenti preziosi per testare la relatività generale, studiare la materia in condizioni estreme e persino rilevare onde gravitazionali di bassissima frequenza.',
		]);

		Article::create([
			'title' => 'Le comete: viaggiatrici ghiacciate del Sistema Solare',
			'article' => 'Le comete sono corpi ghiacciati che provengono dalle regioni più remote del Sistema Solare, come la fascia di Kuiper o la nube di Oort. Quando si avvicinano al Sole, il calore sublima il ghiaccio e genera una chioma gassosa luminosa e una o più code che si estendono per milioni di chilometri, sempre orientate in direzione opposta al Sole. Le comete sono considerate fossili cosmici: conservano la composizione chimica del Sistema Solare primordiale. La missione Rosetta dell\'ESA ha raggiunto e orbitato la cometa 67P/Churyumov-Gerasimenko, rilevando molecole organiche complesse. Alcuni scienziati ipotizzano che le comete abbiano portato acqua e composti organici sulla Terra primordiale, contribuendo all\'origine della vita.',
		]);

		Article::create([
			'title' => 'Le onde gravitazionali: ascoltare il canto dell\'universo',
			'article' => 'Le onde gravitazionali sono increspature nello spaziotempo previste da Einstein nel 1916 e rilevate per la prima volta il 14 settembre 2015 dall\'interferometro LIGO. Quella prima rilevazione era prodotta dalla fusione di due buchi neri a oltre un miliardo di anni luce di distanza. Da allora, decine di eventi sono stati registrati, tra cui la fusione di stelle di neutroni, osservata contemporaneamente in luce visibile, aprendo l\'era dell\'astronomia multimessaggero. Le onde gravitazionali trasportano informazioni uniche: passano attraverso qualsiasi ostacolo senza essere assorbite o deviate, permettendoci di osservare fenomeni completamente oscuri alla luce. Nuovi rivelatori, come LISA nello spazio, porteranno questa finestra sull\'universo a livelli di sensibilità ancora maggiori.',
		]);
		
		Article::create([
			'title' => 'Giove: il gigante che protegge il Sistema Solare',
			'article' => 'Giove è il pianeta più grande del Sistema Solare, con una massa pari a più di due volte quella di tutti gli altri pianeti messi insieme. È un gigante gassoso privo di superficie solida, con una Grande Macchia Rossa — un anticiclone gigantesco attivo da almeno 350 anni — visibile anche con telescopi amatoriali. La sua enorme gravità svolge un ruolo fondamentale nel proteggere i pianeti interni, tra cui la Terra, intercettando o deviando asteroidi e comete che potrebbero altrimenti collidere con noi. Possiede 95 lune confermate; tra queste, Europa potrebbe ospitare un oceano liquido sotto la sua crosta ghiacciata, rendendola uno dei luoghi più promettenti per la ricerca di vita extraterrestre nel Sistema Solare.',
		]);

		Article::create([
			'title' => 'L\'energia oscura: la forza che accelera l\'universo',
			'article' => 'Nel 1998, due team di astronomi scoprirono che l\'espansione dell\'universo non stava rallentando come previsto, ma accelerando. La causa di questa accelerazione fu denominata energia oscura, una componente misteriosa che costituisce circa il 68% del contenuto energetico totale dell\'universo. La sua natura è completamente sconosciuta: potrebbe essere la costante cosmologica introdotta da Einstein, una proprietà intrinseca dello spazio vuoto, oppure un campo energetico dinamico che evolve nel tempo. Le conseguenze dell\'energia oscura sono enormi: se la sua intensità cresce, l\'universo potrebbe terminare in un Big Rip, strappando progressivamente ogni struttura, dalle galassie agli atomi. Missioni come Euclid dell\'ESA sono progettate per mapparne gli effetti con precisione.',
		]);

		Article::create([
			'title' => 'Mercurio: il pianeta degli estremi dimenticato',
			'article' => 'Mercurio è il pianeta più piccolo e più vicino al Sole del Sistema Solare. La sua orbita è altamente ellittica e percorre un anno mercuriano in soli 88 giorni terrestri. Nonostante la sua vicinanza al Sole, non è il pianeta più caldo del sistema — il primato spetta a Venere, grazie all\'effetto serra — ma sperimenta le escursioni termiche più estreme: da oltre 430°C di giorno a -180°C di notte. La superficie è costellata di crateri e presenta una caratteristica unica nel Sistema Solare: un nucleo ferroso che occupa circa l\'85% del volume planetario. La missione BepiColombo, sviluppata congiuntamente da ESA e JAXA, è in viaggio verso Mercurio e arriverà in orbita nel 2026 per svelarne i segreti geologici e magnetici.',
		]);

		Article::create([
			'title' => 'L\'inquinamento luminoso: un nemico invisibile dell\'astronomia',
			'article' => 'L\'inquinamento luminoso è la conseguenza del crescente uso di illuminazione artificiale nelle aree urbane e suburbane. Dispersa nell\'atmosfera, questa luce artificiale crea un bagliore nel cielo notturno che rende invisibile la maggior parte delle stelle. Si stima che oltre il 99% della popolazione europea e nordamericana viva sotto cieli inquinati dalla luce artificiale. Oltre all\'impatto sull\'astronomia, l\'inquinamento luminoso altera i ritmi circadiani di molte specie animali, interferisce con le migrazioni degli uccelli e disturba il ciclo riproduttivo degli insetti. Riserve Stellari e parchi astronomici stanno emergendo in tutto il mondo come oasi di cielo buio. L\'adozione di illuminazione a LED orientata verso il basso e di normative locali può ridurre significativamente questo problema.',
		]);

		Article::create([
			'title' => 'Venere: il gemello infernale della Terra',
			'article' => 'Venere è spesso definito il gemello della Terra per le sue dimensioni e massa simili, ma è in realtà un mondo completamente diverso. La sua atmosfera densa è composta principalmente da anidride carbonica con nubi di acido solforico, creando un effetto serra estremo che porta la temperatura superficiale a circa 465°C costanti — abbastanza caldo da fondere il piombo. La pressione atmosferica sulla superficie è 92 volte quella terrestre. Venere ruota molto lentamente e in senso retrogrado, il che significa che il Sole vi sorge a ovest e tramonta a est. Recenti osservazioni hanno suggerito possibili tracce di attività vulcanica ancora in corso. La missione VERITAS della NASA e EnVision dell\'ESA sono progettate per svelare i misteri di questo pianeta ancora poco esplorato.',
		]);

		Article::create([
			'title' => 'La ricerca di vita extraterrestre: siamo davvero soli?',
			'article' => 'La domanda se esistano altre forme di vita nell\'universo è una delle più antiche e profonde della storia umana. Oggi la scienza l\'affronta con strumenti concreti: si cercano biosegnature nell\'atmosfera degli esopianeti, si studiano gli ambienti estremi della Terra per capire i limiti della vita, si analizzano campioni di Marte e si sonda l\'oceano sotterraneo di Europa. Il programma SETI monitora lo spazio alla ricerca di segnali radio artificiali. La recente scoperta di molecole organiche complesse nelle comete e nelle meteore suggerisce che i mattoni della vita siano diffusi nell\'universo. Con miliardi di stelle simili al Sole e miliardi di pianeti potenzialmente abitabili solo nella Via Lattea, la probabilità statistica che la vita sia un fenomeno esclusivamente terrestre appare ogni anno sempre più difficile da sostenere.',
		]);

	}
}

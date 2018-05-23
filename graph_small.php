<?
require("./gear_functions.php");
require("./jpgraph.php");
require("./jpgraph_line.php");

// Create the graph. These two calls are always required
$graph = new Graph(300,200,"auto");	
$graph->SetScale("linlin");
$graph->img->SetMargin(55,20,30,35);
$graph->title->Set("Turn Zero Gear Plot");
$graph->xaxis->title->Set("Vehicle Speed (MPH)");
$graph->yaxis->title->Set("Engine Speed (RPM)");
$graph->yaxis->title_margin = 40;
$graph->xgrid->Show("true","true");
$graph->ygrid->Show("true","true");

if($gear[1]){
  //Gear 1
  $xdata1 = array(0,maxSpeed($gear[1]));
  $ydata1 = array(0,$redline);
  $lineplot1=new LinePlot($ydata1,$xdata1);
  $lineplot1->SetStyle("solid");
  $lineplot1->SetColor("firebrick3");
  $lineplot1->SetWeight(2);
}

if($gear[2]){
  //Gray part of gear 2
  $xdata2a = array(0,maxSpeed($gear[1]));
  $ydata2a = array(0,engineSpeed($gear[2],maxSpeed($gear[1])));
  $lineplot2a=new LinePlot($ydata2a,$xdata2a);
  $lineplot2a->SetStyle("solid");
  $lineplot2a->SetColor("darkgray");

  //Red part of gear 2
  $xdata2b = array(maxSpeed($gear[1]),maxSpeed($gear[2]));
  $ydata2b = array(engineSpeed($gear[2],maxSpeed($gear[1])),$redline);
  $lineplot2b=new LinePlot($ydata2b,$xdata2b);
  $lineplot2b->SetStyle("solid");
  $lineplot2b->SetColor("firebrick3");
  $lineplot2b->SetWeight(2);
}

if($gear[3]){
  //Gray part of gear 3
  $xdata3a = array(0,maxSpeed($gear[2]));
  $ydata3a = array(0,engineSpeed($gear[3],maxSpeed($gear[2])));
  $lineplot3a=new LinePlot($ydata3a,$xdata3a);
  $lineplot3a->SetStyle("solid");
  $lineplot3a->SetColor("darkgray");

  //Red part of gear 3
  $xdata3b = array(maxSpeed($gear[2]),maxSpeed($gear[3]));
  $ydata3b = array(engineSpeed($gear[3],maxSpeed($gear[2])),$redline);
  $lineplot3b=new LinePlot($ydata3b,$xdata3b);
  $lineplot3b->SetStyle("solid");
  $lineplot3b->SetColor("firebrick3");
  $lineplot3b->SetWeight(2);
}

if($gear[4]){
  //Gray part of gear 4
  $xdata4a = array(0,maxSpeed($gear[3]));
  $ydata4a = array(0,engineSpeed($gear[4],maxSpeed($gear[3])));
  $lineplot4a=new LinePlot($ydata4a,$xdata4a);
  $lineplot4a->SetStyle("solid");
  $lineplot4a->SetColor("darkgray");

  //Red part of gear 4
  $xdata4b = array(maxSpeed($gear[3]),maxSpeed($gear[4]));
  $ydata4b = array(engineSpeed($gear[4],maxSpeed($gear[3])),$redline);
  $lineplot4b=new LinePlot($ydata4b,$xdata4b);
  $lineplot4b->SetStyle("solid");
  $lineplot4b->SetColor("firebrick3");
  $lineplot4b->SetWeight(2);
}

if($gear[5]){
  //Gray part of gear 5
  $xdata5a = array(0,maxSpeed($gear[4]));
  $ydata5a = array(0,engineSpeed($gear[5],maxSpeed($gear[4])));
  $lineplot5a=new LinePlot($ydata5a,$xdata5a);
  $lineplot5a->SetStyle("solid");
  $lineplot5a->SetColor("darkgray");

  //Red part of gear 5
  $xdata5b = array(maxSpeed($gear[4]),maxSpeed($gear[5]));
  $ydata5b = array(engineSpeed($gear[5],maxSpeed($gear[4])),$redline);
  $lineplot5b=new LinePlot($ydata5b,$xdata5b);
  $lineplot5b->SetStyle("solid");
  $lineplot5b->SetColor("firebrick3");
  $lineplot5b->SetWeight(2);
}

if($gear[6]){
  //Gray part of gear 6
  $xdata6a = array(0,maxSpeed($gear[5]));
  $ydata6a = array(0,engineSpeed($gear[6],maxSpeed($gear[5])));
  $lineplot6a=new LinePlot($ydata6a,$xdata6a);
  $lineplot6a->SetStyle("solid");
  $lineplot6a->SetColor("darkgray");

  //Red part of gear 6
  $xdata6b = array(maxSpeed($gear[5]),maxSpeed($gear[6]));
  $ydata6b = array(engineSpeed($gear[6],maxSpeed($gear[5])),$redline);
  $lineplot6b=new LinePlot($ydata6b,$xdata6b);
  $lineplot6b->SetStyle("solid");
  $lineplot6b->SetColor("firebrick3");
  $lineplot6b->SetWeight(2);
}

if($gear[7]){
  //Gray part of gear 7
  $xdata7a = array(0,maxSpeed($gear[6]));
  $ydata7a = array(0,engineSpeed($gear[7],maxSpeed($gear[6])));
  $lineplot7a=new LinePlot($ydata7a,$xdata7a);
  $lineplot7a->SetStyle("solid");
  $lineplot7a->SetColor("darkgray");

  //Red part of gear 5
  $xdata7b = array(maxSpeed($gear[6]),maxSpeed($gear[7]));
  $ydata7b = array(engineSpeed($gear[7],maxSpeed($gear[6])),$redline);
  $lineplot7b=new LinePlot($ydata7b,$xdata7b);
  $lineplot7b->SetStyle("solid");
  $lineplot7b->SetColor("firebrick3");
  $lineplot7b->SetWeight(2);
}

if($gear[1]){
  $graph->Add($lineplot1);
}
if($gear[2]){
  $graph->Add($lineplot2a);
  $graph->Add($lineplot2b);
}
if($gear[3]){
  $graph->Add($lineplot3a);
  $graph->Add($lineplot3b);
}
if($gear[4]){
  $graph->Add($lineplot4a);
  $graph->Add($lineplot4b);
}
if($gear[5]){
  $graph->Add($lineplot5a);
  $graph->Add($lineplot5b);
}
if($gear[6]){
  $graph->Add($lineplot6a);
  $graph->Add($lineplot6b);
}
if($gear[7]){
  $graph->Add($lineplot7a);
  $graph->Add($lineplot7b);
}

// Display the graph
$graph->Stroke();

?>
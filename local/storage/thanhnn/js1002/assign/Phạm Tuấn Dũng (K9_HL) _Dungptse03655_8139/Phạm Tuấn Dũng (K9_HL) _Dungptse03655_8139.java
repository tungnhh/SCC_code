/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Snow
 */
public class IOrder {
  String name;
  float weight;
  float width;
  float height;
  float price;
    public float getHeight() {
        return height;
    }

    public void setHeight(float height) {
        this.height = height;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public float getPrice() {
        return price;
    }

    public void setPrice(float price) {
        this.price = price;
    }
 
    public float getWeight() {
        return weight;
    }

    public void setWeight(float weight) {
        this.weight = weight;
    }

    public float getWidth() {
        return width;
    }

    public void setWidth(float width) {
        this.width = width;
    }
    
    
  @Override
    public String toString() {
        return ("\nname: "+this.name+"\nHeight: "+this.height+"\nPrice: "+this.price+"\nWeight: "+this.weight+"\nWidth: "+this.width);
    }
    
    
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.util.Scanner;

/**
 *
 * @author Snow
 */
public class Laptop extends IOrder{
    float Depth;
    float Screen;
    int HDD;
    
    public Laptop(String name,float weight,float width,float height,float price,float depth,float Screen,int HDD){
        super.name=name;
        super.weight=weight;
        super.width=width;
        super.height=height;
        super.price=price;
        this.Depth=depth;
        this.Screen=Screen;
        this.HDD=HDD;
    }
    public void Display(){
     System.out.println("Name : "+super.name);
     System.out.println("Weight : "+super.weight+"g" );
     System.out.println("Width : "+super.width+"”");
     System.out.println("Height : "+super.height+"”");
     System.out.println("Price : "+super.price+"$");
     System.out.println("Depth: "+this.Depth+ " ”");
        System.out.println("Screen: "+this.Screen + " ”");
        System.out.println("HDD : "+this.HDD + " GB");
        System.out.println("————");
    }

    public float getDepth() {
        return Depth;
    }

    public void setDepth(float Depth) {
        this.Depth = Depth;
    }

    public float getScreen() {
        return Screen;
    }

    public void setScreen(float Screen) {
        this.Screen = Screen;
    }

    public int getHDD() {
        return HDD;
    }

    public void setHDD(int HDD) {
        this.HDD = HDD;
    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.util.ArrayList;
import java.util.Scanner;

/**
 *
 * @author Snow
 */
public class Main {
    

    
    public static void main(String[] args) throws IOException {
        Main m= new Main();
       Scanner sc= new Scanner(System.in);
       Order Order=new Order();
       Menu a= new Menu();
       Order o= new Order();
       
 
          
          
//          m.menu1();
//          int f =sc.nextInt();
//          if(f==2){
//          o.Display();
//          }
//          if(f==3){
//              o.ByName();
//              m.menu1();
//          }
//         f =sc.nextInt();
//         if(f==4){
//                 o.PriceDescending();
//                 m.menu1();
//                 }
//         f=sc.nextInt();
//         if(f==5){
//             o.WeightAscending();
//             m.menu1();
//         }
        int chon=0; 
        while(true){ 
     System.out.println("1. Create an Order"); 
     System.out.println("2. List all Order");
     System.out.println("3. Sort the List by the Name of the product in dictionary order");
     System.out.println("4. Sort the List by the Price of the product in descending order");
     System.out.println("5. Sort the List by the Weight of the product in ascending order");
     System.out.println("6. Save the List to a file");
     System.out.println("7. Load the List from a file");
     System.out.println("8. Exit");
     
             while(true) 
             { 
                 try{ 
                     chon = Integer.parseInt(sc.nextLine()); 
                     if(chon<=0||chon>8) 
                     { 
                         System.out.print ("PLEASE RECHOOSE 1->6\nTRY AGAIN: "); 
                         continue; 
                     } 
                     break; 
                 } 
                 catch(Exception ex) 
                 { 
                     System.out.print ("IT MUST A INTERGER\nTRY AGAIN: "); 
                 } 
             }
              switch(chon) 
             { 
                 case 1: 
                    a.menu2();
          
          for( int j=0;j<a.getOrder();j++){
               o.menu3();
           }
          a.Display1();
          o.Display();
          System.out.println("System.out.println(\"=====================================\");");
                     break; 
                 case 2: 
                     o.Display();
                     break; 
                 case 3: 
                     o.ByName();
                     break; 
                 case 4: 
                     o.PriceDescending();
                     break; 
                 case 5: 
                     o.WeightAscending();
                     break; 
                 case 6: 
                     o.FileOutput();
                     break;
                 case 7:
                     o.FileInput();
                     break;
                 case 8:
                     System.exit(0);
                     break;
             } 
  }
         
           
       }
//    public void menu1(){
//     System.out.println("1. Create an Order"); 
//     System.out.println("2. List all Order");
//     System.out.println("3. Sort the List by the Name of the product in dictionary order");
//     System.out.println("4. Sort the List by the Price of the product in descending order");
//     System.out.println("5. Sort the List by the Weight of the product in ascending order");
//     System.out.println("6. Save the List to a file");
//     System.out.println("7. Load the List from a file");
//     System.out.println("8. Exit");
//    }
    }
    

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.util.Scanner;

/**
 *
 * @author Snow
 */
public class Menu {
    String name;
    String identifier;
    int order;

    public int getOrder() {
        return order;
    }

    public void setOrder(int order) {
        this.order = order;
    }
    
  public void menu2(){
     int k;
         Scanner rc=new Scanner(System.in);
         System.out.println("Please provide us your information!");
         System.out.print("Customer name :");
         name = rc.nextLine();
         System.out.print("Customer ID No:");
         identifier = rc.nextLine();
         
         
         
         System.out.print("How many product do you want to order? ");
          k =rc.nextInt();
          
         order=k;
          
                  
        
  }
 
  
  public void Display1(){
      System.out.println("=====================================");
      System.out.println("Thank you for ordering! Your order is:");
      System.out.println("————————————-");
      System.out.println("Customer name: " +name);
      System.out.println("Customer ID No:" +identifier);
      System.out.println("————————");
  }


  
}


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Snow
 */
public class MobilePhone extends IOrder{
    
  
 
  boolean multitouch;
  boolean Loudspeaker;
  float thickness;
  float screensize;
  int n=0;

 public  MobilePhone(String name1,float weight,float width,float height,float price, boolean multitouch,boolean Loudspeaker,float thickness,float screensize){
    super.name = name1;
    super.weight=weight;
    super.width= width;
    super.height=height;
    super.price=price;
    this.Loudspeaker =Loudspeaker;
    this.multitouch= multitouch;
    this.thickness=thickness;
    this.screensize=screensize;
}
  
 public void Display(){
     System.out.println("Name : "+super.name);
     System.out.print("Price : $ ");
     System.out.format("%.0f%n",super.price);
     System.out.println("Weight : "+super.weight+" g" );
     System.out.println("Height : "+super.height+" ”");
     System.out.println("Width : "+super.width+" ”");
     System.out.println("Thickness : "+ this.thickness + " ”");
     System.out.println("Multitouch: "+this. multitouch);
     System.out.println("loudspeaker: "+ this.Loudspeaker );
     System.out.println("Screen size: "+this.screensize + " ”");
     System.out.println("————");
 }

    @Override
    public float getHeight() {
        return super.getHeight(); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void setHeight(float height) {
        super.setHeight(height); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public String getName() {
        return super.getName(); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void setName(String name) {
        super.setName(name); //To change body of generated methods, choose Tools | Templates.
    }

  


    @Override
    public String toString() {
        return("name"+super.name+"\nPrice"+super.price+"\nHeight: " +super.height+"\nWidth:"+super.width+"\nWeight: "+super.weight +"\nThickness : "+this.thickness+"\nMultitouch: "+this.multitouch+"\nloudspeaker: "
        +this.Loudspeaker+" ”"+"Screen size: "+this.screensize);
                
    }
  

  
 

  
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.Scanner;
import static javafx.beans.binding.Bindings.convert;
import static jdk.nashorn.api.scripting.ScriptUtils.convert;


/**
 *
 * @author Snow
 */
public class Order {
   int count=0;
   
   MobilePhone MP[]= new MobilePhone[1000];
   Laptop LT[] = new Laptop[1000];
   Tablet TB[]= new Tablet[1000];
    ArrayList<IOrder> IO =new ArrayList<>();
   
    public void menu3(){
       
      count++;
      
      Menu a= new Menu();      
      
      
      
      
      String choose;
      String Mobile = "M";
      String Laptop = "L";
      String Tablet = "T";
      Scanner sc = new Scanner(System.in);
      System.out.println("Which kind of product (MobilePhone=M, Laptop=L, Tablet=T) :");
      choose = sc.nextLine();
      if(choose.equals(Mobile))
      {
          
           InputMobile();
      }
      if(choose.equals(Tablet))
      {
          
          InputTablet();         
      }
      if(choose.equals(Laptop))
      {
          
          InputLaptop();
      }
      
  } 
    
  
    public void InputMobile(){
        
  String name1;
  float weight;
  float width;
  float height;
  float price;
  boolean multitouch;
  boolean Loudspeaker;
  float thickness;
  float screensize;
      
      Scanner sc = new Scanner(System.in);
      System.out.println("Please give me your mobile phone features : ");
      System.out.print("Name: ");
      name1 = sc.nextLine();
      
      System.out.print("price: ");
      price =sc.nextFloat();
      
      System.out.print("weight: ");
      weight=sc.nextFloat();
      
      System.out.print("height: ");
      height =sc.nextFloat();
      
      System.out.print("width: ");
      width =sc.nextFloat();
      
      System.out.print("Thickness : ");
      thickness = sc.nextFloat();
      
      System.out.print("multitouch: ");
      multitouch = sc.nextBoolean();
      
      System.out.print("Loudspeaker: ");
      Loudspeaker = sc.nextBoolean();
      
      System.out.print("screensize: ");
      screensize = sc.nextFloat();
      
      
      MP[count]= new MobilePhone(name1,weight,width,height,price,multitouch,Loudspeaker,thickness,screensize);
      IO.add(new MobilePhone(name1, weight, width, height, price, multitouch, Loudspeaker, thickness, screensize));
       
      
}
    public void InputLaptop(){
  String name;
  float weight;
  float width;
  float height;
  float price;
    float Depth;
    float Screen;
    int HDD;
        Scanner sc= new Scanner(System.in);
      System.out.println("Please give me your Laptop features: ");
      System.out.print("Name: ");
      name = sc.nextLine();
      
      System.out.print("price: ");
      price =sc.nextFloat();
      
      System.out.print("weight: ");
      weight=sc.nextFloat();
      
      System.out.print("height: ");
      height =sc.nextFloat();
      
      System.out.print("width: ");
      width =sc.nextFloat();
      
        System.out.print("Depth : ");
        Depth = sc.nextFloat();
        
        System.out.print("Screen size : ");
        Screen = sc.nextFloat();
        
        System.out.print("HDD : ");
        HDD = sc.nextInt();
        LT[count]= new Laptop(name,weight,width,height,price,Depth,Screen,HDD);
        IO.add(new Laptop(name, weight, width, height, price, Depth, Screen, HDD));
    }
    public void InputTablet(){
  String name;
  float weight;
  float width;
  float height;
  float price;
  float Thinkness ;
  int Memory ;
  boolean GG = false;
  String GG2;
       Scanner sc= new Scanner(System.in);
       System.out.println("Please give me your Tablet features");
       System.out.print("Name: ");
      name = sc.nextLine();
      
      System.out.print("price: ");
      price =sc.nextFloat();
      
      System.out.print("weight: ");
      weight=sc.nextFloat();
      
      System.out.print("height: ");
      height =sc.nextFloat(); 
      
      System.out.print("width: ");
      width =sc.nextFloat();
      
      System.out.print("Thinkness : ");
       Thinkness = sc.nextFloat();
       
      System.out.print("Memory Size : ");
       Memory = sc.nextInt();
       sc.nextLine();
       System.out.print("3G : ");
       GG2 = sc.nextLine();
       if(GG2.equals("YES"))
       {
           GG = true;
       }
        if(GG2.equals("NO"))
        {
            GG = false;
        }
       
      
       
       TB[count]= new Tablet(name,weight,width,height,price,Thinkness,Memory,GG,GG2);
       IO.add(new Tablet(name, weight, width, height, price, Thinkness, Memory, GG, GG2));
   }
    
    public void Display(){
       for(int i=0;i<=count;i++){
           if(MP[i] instanceof MobilePhone){
             MP[i].Display();       
                        }
           if(LT[i] instanceof Laptop){
               LT[i].Display();
           }
           if(TB[i] instanceof Tablet){
               TB[i].Display();
           }
       }     
}
    
    public void ByName(){
       
       Collections.sort(IO, new Comparator<IOrder>() {
            @Override
            public int compare(IOrder sv1, IOrder sv2) {
                return (sv1.getName().compareTo(sv2.getName()));
                // Muốn đảo danh sách các bạn đối thành
                //return (sv2.hoTen.compareTo(sv1.hoTen));
            }
        });
        System.out.println("List by the Name of the product in dictionary order");
       for(int i=0;i<IO.size();i++){
           System.out.println("-------\n"+IO.get(i).toString());
       }
        
}
    public void PriceDescending(){
        Collections.sort(IO, new Comparator<IOrder>() {
            @Override
            public int compare(IOrder sv1, IOrder sv2) {
                if (sv1.getPrice() < sv2.getPrice()) {
                    return 1;
                } else {
                    if (sv1.getPrice() == sv2.getPrice()) {
                        return 0;
                    } else {
                        return -1;
                    }
                }
            }
        });
 
        System.out.println("Sort the List by the Price of the product in descending order");
       for(int i=0;i<IO.size();i++){
           System.out.println("-------\n"+IO.get(i).toString());
       }
    }
    
    public void WeightAscending(){
       Collections.sort(IO, new Comparator<IOrder>() {
            @Override
            public int compare(IOrder sv1, IOrder sv2) {
                if (sv1.getWeight() > sv2.getWeight()) {
                    return 1;
                } else {
                    if (sv1.getWeight() == sv2.getWeight()) {
                        return 0;
                    } else {
                        return -1;
                    }
                }
            }
        });
 
        System.out.println("Sort the List by the Price of the product in descending order");
       for(int i=0;i<IO.size();i++){
           System.out.println("-------\n"+IO.get(i).toString());
       } 
    }
    
    public void FileOutput(){
            
        File f = new File("E:\\User.txt"); 
         
        try{ 
            FileOutputStream fi = new FileOutputStream(f); 
            OutputStreamWriter out = new OutputStreamWriter(fi); 
            BufferedWriter b = new BufferedWriter(out); 
             
            for(int i=0; i<IO.size(); i++) 
            {                
                b.write(IO.get(i).toString()); 
                b.newLine(); 
            } 
            b.close(); 
            System.out.println ("Luu thanh cong!!!"); 
        } 
        catch(IOException ex){         
        } 
    }
    public void FileInput() throws IOException{
       File f = new File("E:\\User.txt"); 
         
        try{ 
            FileInputStream k = new FileInputStream(f); 
            InputStreamReader in = new InputStreamReader(k); 
            BufferedReader br = new BufferedReader(in);  
            StringBuilder s = new StringBuilder(); 
            String t = br.readLine(); 
            if(t==null) 
            { 
                System.out.println ("File rong, chua co du lieu!"); 
            } 
            else {
//              int i = 1; 
//               String[] a = t.split(";"); 
//                    try{ 
//                        setId(Integer.parseInt(a[0])); 
//                    } 
//                    catch(Exception ex){ 
//                    } 
//                   
//                    t = br.readLine(); 
//                    i++; 
//                } 
//                Display(IU);         
            } 
             
        } 
        catch(IOException ex){ 
        } 
            } 
    }
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author snow
 */
public class Tablet extends IOrder{
   float Thinkness ;
   int Memory ;
   boolean GG;
   String GG2;
   
   public Tablet(String name,float weight,float width,float height,float price,float thinkness,int Memory,boolean GG,String GG2){
      super.name=name;
        super.weight=weight;
        super.width=width;
        super.height=height;
        super.price=price;
        this.Thinkness=thinkness;
        this.Memory=Memory;
        this.GG=GG;
        this.GG2=GG2;
   }
   public void Display(){
     System.out.println("Name : "+super.name);
     System.out.println("Weight : "+super.weight+"g" );
     System.out.println("Width : "+super.width+"”");
     System.out.println("Height : "+super.height+"”");
     System.out.println("Price : "+super.price+"$");
     System.out.println("Thinkness: "+this.Thinkness+"”");
       System.out.println("Memory: "+this.Memory+ "”");
       System.out.println("3G: "+this.GG2);
       System.out.println("————");
   }

    @Override
    public String getName() {
        return super.getName(); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void setName(String name) {
        super.setName(name); //To change body of generated methods, choose Tools | Templates.
    }
    

    @Override
    public String toString(){
        return super.toString() + "Thickness: "+this.Thinkness+"''"+"\nMemory size: "+this.Memory+" GB."+"\n3G: "+this.GG2;
    }
   
  
   
}

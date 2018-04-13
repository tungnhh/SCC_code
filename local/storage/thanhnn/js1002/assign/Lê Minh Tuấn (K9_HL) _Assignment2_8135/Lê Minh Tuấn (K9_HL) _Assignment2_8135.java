/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;

/**
 *
 * @author User
 */
public class Laptop extends Product {
    private float screen_size;
    private float depth;
    private int hdd_capacity;
    public Laptop()
    {
        super();
    }
    public Laptop(String n,float wi,float we,float h, float p,float ss, float d, int hc)
    {
        super(n,wi,we,h,p);
        screen_size = ss;
        depth = d;
        hdd_capacity = hc;
    }
    @Override
    public String toString()
    {
        return "Name : "+super.name+"\r\n"+"Price : $ "+super.price+"\r\n"+"Weight : "+super.weight+" g."
                +"\r\n"+"Height : "+super.height+"\""+"\r\n"+"Width : "+super.width+"\""
                +"\r\n"+"Depth : "+depth+"\""+"\r\n"+"Screen size : "+screen_size+"\""+"\r\n"
                +"HDD : "+hdd_capacity+" GB."
                ;
    }
    /**
     * @return the screen_size
     */
    public float getScreen_size() {
        return screen_size;
    }

    /**
     * @param screen_size the screen_size to set
     */
    public void setScreen_size(float screen_size) {
        this.screen_size = screen_size;
    }

    /**
     * @return the depth
     */
    public float getDepth() {
        return depth;
    }

    /**
     * @param depth the depth to set
     */
    public void setDepth(float depth) {
        this.depth = depth;
    }

    /**
     * @return the hdd_capacity
     */
    public int getHdd_capacity() {
        return hdd_capacity;
    }

    /**
     * @param hdd_capacity the hdd_capacity to set
     */
    public void setHdd_capacity(int hdd_capacity) {
        this.hdd_capacity = hdd_capacity;
    }
    public String getName() {
        return super.getName();
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        super.setName(name);
    }

    /**
     * @return the width
     */
    public float getWidth() {
        return super.getHeight();
    }

    /**
     * @param width the width to set
     */
    public void setWidth(float width) {
        super.setWidth(width);
    }

    /**
     * @return the height
     */
    public float getHeight() {
        return super.getHeight();
    }

    /**
     * @param height the height to set
     */
    public void setHeight(float height) {
        super.setHeight(height);
    }

    /**
     * @return the price
     */
    public float getPrice() {
        return super.getPrice();
    }

    /**
     * @param price the price to set
     */
    public void setPrice(float price) {
        super.setPrice(price);
    }
    
}
package assignment1;

import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        int choice;
        String name;
        float width;
        float height;
        float price;
        float weight;
        float depth;
        float thickness;
        float screensize;
        int i = 0;
        Menu menu = new Menu();
        Scanner sc = new Scanner(System.in);
        menu.display();
        choice = menu.getChoice();
        toFile tf = new toFile();
        if (choice == 1) {
            System.out.println("=================================================");
            System.out.println("Please provide us your information");

            System.out.print("Customer name: ");
            name = sc.nextLine();

            System.out.print("Customer ID No: ");
            String id = sc.nextLine();
            Order customer = new Order(name, id);
            System.out.print("How many product you want to order? ");
            int numofPro = sc.nextInt();
            Product[] orderline = new Product[numofPro];
            do {

                System.out.print("Which kind of product (MobilePhone=M, Laptop=L, Tablet=T): ");
                char proName = sc.next().charAt(0);
                switch (proName) {
                    case 'M':
                        System.out.println("Please give me your mobile phone features:");
                        sc.nextLine();
                        System.out.print("Name : ");
                        name = sc.nextLine();
                        System.out.print("Price : ");
                        price = Float.parseFloat(sc.nextLine());
                        System.out.print("Weight : ");
                        weight = Float.parseFloat(sc.nextLine());
                        System.out.print("Height : ");
                        height = Float.parseFloat(sc.nextLine());
                        System.out.print("Width : ");
                        width = Float.parseFloat(sc.nextLine());
                        System.out.print("Thickness : ");
                        thickness = Float.parseFloat(sc.nextLine());
                        System.out.print("Multitouch : ");
                        boolean multitouch = sc.nextBoolean();
                        System.out.print("Loudspeaker : ");
                        boolean loudspeaker = sc.nextBoolean();
                        sc.nextLine();
                        System.out.print("Screen size : ");
                        screensize = Float.parseFloat(sc.nextLine());
                        orderline[i] = new MobilePhone(name, width, weight, height, price,
                                multitouch, loudspeaker, thickness, screensize);
                        i++;
                        break;
                    case 'L':
                        System.out.println("Please give me your Laptop features:");
                        name = sc.nextLine();
                        System.out.print("Name : ");
                        name = sc.nextLine();
                        System.out.print("Price : ");
                        price = Float.parseFloat(sc.nextLine());
                        System.out.print("Weight : ");
                        weight = Float.parseFloat(sc.nextLine());
                        System.out.print("Height : ");
                        height = Float.parseFloat(sc.nextLine());
                        System.out.print("Width : ");
                        width = Float.parseFloat(sc.nextLine());
                        System.out.print("Depth : ");
                        depth = Float.parseFloat(sc.nextLine());
                        System.out.print("Screen size : ");
                        screensize = Float.parseFloat(sc.nextLine());
                        System.out.print("HDD : ");
                        int hdd = Integer.parseInt(sc.nextLine());
                        orderline[i] = new Laptop(name, width, weight, height,
                                price, screensize, depth, hdd);
                        i++;
                        break;
                    case 'T':
                        System.out.println("Please give me your Tablet features:");
                        name = sc.nextLine();
                        System.out.print("Name : ");
                        name = sc.nextLine();
                        System.out.print("Price : ");
                        price = Float.parseFloat(sc.nextLine());
                        System.out.print("Weight : ");
                        weight = Float.parseFloat(sc.nextLine());
                        System.out.print("Height : ");
                        height = Float.parseFloat(sc.nextLine());
                        System.out.print("Width : ");
                        width = Float.parseFloat(sc.nextLine());
                        System.out.print("Thickness : ");
                        thickness = Float.parseFloat(sc.nextLine());
                        System.out.print("Memory size : ");
                        int memorysize = Integer.parseInt(sc.nextLine());
                        System.out.print("3G : ");
                        boolean s3 = sc.nextBoolean();
                        orderline[i] = new Tablet(name, width, weight,
                                height, price, memorysize, s3, thickness);
                        i++;
                        break;
                }
            } while (i < numofPro);
            System.out.println("=================================================");
            System.out.println("Thank you for your ordering! Your order is:");
            System.out.println("__________________________________");
            System.out.println(customer);
            for (int j = 0; j < i; j++) {
                System.out.println("__________");
                System.out.println(orderline[j].toString());
            }
            System.out.println("__________________________________");
            System.out.println("=================================================");
            OrderLine bill = new OrderLine(customer,orderline);
            
            tf.fileWriting(bill);
            tf.fileReading();
        } else if (choice == 2) {
            return;
        }

    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;

import java.util.Scanner;

public class Menu {

    int result = 0;

    public Menu() {

    }

    public void display() {
        System.out.println("Shop Management");
        System.out.println("=================================================");
        System.out.println("1. Create an order");
        System.out.println("2. Exit");
        System.out.println("=================================================");
        System.out.print("Your option: ");
    }

    public int getChoice() {
        Scanner sc = new Scanner(System.in);
        result = Integer.parseInt(sc.nextLine());
        return result;
    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;

/**
 *
 * @author User
 */
public class MobilePhone extends Product {
    private boolean multitouch;
    private boolean loud_speaker;
    private float thickness;
    private float screensize;
    public MobilePhone()
    {
        super();
    }
    public MobilePhone(String n,float wi,float we,float h, float p,boolean m,boolean lp,float t, float s)
    {
        super(n,wi,we,h,p);
        multitouch = m;
        loud_speaker = lp;
        thickness = t;
        screensize = s;
    }
    @Override
    public String toString()
    {
        return "Name : "+super.name+"\r\n"+"Price : $ "+super.price+"\r\n"+"Weight : "+super.weight+" g."
                +"\r\n"+"Height : "+super.height+"\""+"\r\n"+"Width : "+super.width+"\""
                +"\r\n"+"Thickness : "+thickness+"\""+"\r\n"+"Multitouch : "+multitouch
                +"\r\n"+"Loudspeaker : "+loud_speaker+"\r\n"+"Screen size : "+screensize+"\"";
    }
    public boolean isMultitouch() {
        return multitouch;
    }

    /**
     * @param multitouch the multitouch to set
     */
    public void setMultitouch(boolean multitouch) {
        this.multitouch = multitouch;
    }

    /**
     * @return the loud_speaker
     */
    public boolean isLoud_speaker() {
        return loud_speaker;
    }

    /**
     * @param loud_speaker the loud_speaker to set
     */
    public void setLoud_speaker(boolean loud_speaker) {
        this.loud_speaker = loud_speaker;
    }

    /**
     * @return the thickness
     */
    public float getThickness() {
        return thickness;
    }

    /**
     * @param thickness the thickness to set
     */
    public void setThickness(float thickness) {
        this.thickness = thickness;
    }

    /**
     * @return the screensize
     */
    public float getScreensize() {
        return screensize;
    }

    /**
     * @param screensize the screensize to set
     */
    public void setScreensize(float screensize) {
        this.screensize = screensize;
    }
    public String getName() {
        return super.getName();
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        super.setName(name);
    }

    /**
     * @return the width
     */
    public float getWidth() {
        return super.getHeight();
    }

    /**
     * @param width the width to set
     */
    public void setWidth(float width) {
        super.setWidth(width);
    }

    /**
     * @return the height
     */
    public float getHeight() {
        return super.getHeight();
    }

    /**
     * @param height the height to set
     */
    public void setHeight(float height) {
        super.setHeight(height);
    }

    /**
     * @return the price
     */
    public float getPrice() {
        return super.getPrice();
    }

    /**
     * @param price the price to set
     */
    public void setPrice(float price) {
        super.setPrice(price);
    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;

/**
 *
 * @author User
 */
public class Order {
    String name;
    String id;
    public Order(String n, String i)
    {
        name= n;
        id = i;
    }
    @Override
    public String toString()
    {
        return "_______________________________________\r\n"
                +"Customer name: "+name+"\r\n"+"Customer ID No: "+id;
    }
    public Order()
    {
        
    }
    public void setName(String n)
    {
        n = name;
    }
    public String getName()
    {
        return name;
    }
    public void setId(String i)
    {
        i = id;
    }
    public String getId()
    {
        return id;
    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;



/**
 *
 * @author User
 */
public class OrderLine {
    Order or;
    Product[] pr;
    public OrderLine(Order o,Product[] p){
        or= o;
        pr=p;
    }
    public String getOrder(){
        return or.toString();
    }
    @Override
    public String toString(){
        return pr.toString();
    }
   
    
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;

/**
 *
 * @author User
 */
public  class Product {
     String name;
     float width;
     float weight;
     float height;
     float price;
     public Product(String n,float wi,float we,float h, float p)
     {
         name=n;
         width = wi;
         height = h;
         price = p;
         weight = we;
     }
     public Product(){
         
     }
    /**
     * @return the name
     */
    public String getName() {
        return name;
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     * @return the width
     */
    public float getWidth() {
        return width;
    }

    /**
     * @param width the width to set
     */
    public void setWidth(float width) {
        this.width = width;
    }

    /**
     * @return the height
     */
    public float getHeight() {
        return height;
    }

    /**
     * @param height the height to set
     */
    public void setHeight(float height) {
        this.height = height;
    }

    /**
     * @return the price
     */
    public float getPrice() {
        return price;
    }

    /**
     * @param price the price to set
     */
    public void setPrice(float price) {
        this.price = price;
    }
    
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;

/**
 *
 * @author User
 */
public class Tablet extends Product {
    private int memory_size;
    private boolean support_3g;
    private float thickness;
    public Tablet()
    {
        super();
    }
    public Tablet(String n,float wi,float we,float h, float p,int ms, boolean s3,float tk)
    {
        super(n,wi,we,h,p);
        memory_size  =ms;
        support_3g = s3;
        thickness = tk;
    }
    @Override
    public String toString()
    {
        return "Name : "+super.name+"\r\n"+"Price : $ "+super.price+"\r\n"+"Weight : "+super.weight+" g."
                +"\r\n"+"Height : "+super.height+"\""+"\r\n"+"Width : "+super.width+"\""
                +"\r\n"+"Thickness : "+thickness+"\""+"\r\n"+"Memory size : "+memory_size+" GB."
                +"\r\n"+"3G : "+support_3g
                ;
    }
    /**
     * @return the memory_size
     */
    public int getMemory_size() {
        return memory_size;
    }

    /**
     * @param memory_size the memory_size to set
     */
    public void setMemory_size(int memory_size) {
        this.memory_size = memory_size;
    }

    /**
     * @return the support_3g
     */
    public boolean isSupport_3g() {
        return support_3g;
    }

    /**
     * @param support_3g the support_3g to set
     */
    public void setSupport_3g(boolean support_3g) {
        this.support_3g = support_3g;
    }
    public String getName() {
        return super.getName();
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        super.setName(name);
    }

    /**
     * @return the width
     */
    public float getWidth() {
        return super.getHeight();
    }

    /**
     * @param width the width to set
     */
    public void setWidth(float width) {
        super.setWidth(width);
    }

    /**
     * @return the height
     */
    public float getHeight() {
        return super.getHeight();
    }

    /**
     * @param height the height to set
     */
    public void setHeight(float height) {
        super.setHeight(height);
    }

    /**
     * @return the price
     */
    public float getPrice() {
        return super.getPrice();
    }

    /**
     * @param price the price to set
     */
    public void setPrice(float price) {
        super.setPrice(price);
    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package assignment1;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.util.ArrayList;

/**
 *
 * @author User
 */
public class toFile {

    public toFile(){
        
    }
    public void fileWriting(OrderLine o){
        try {
            
            FileWriter fw = new FileWriter("Order.txt");
            BufferedWriter bw = new BufferedWriter(fw);
            bw.write(o.getOrder());
            for (int i = 0; i < o.pr.length; i++) {
                bw.write("\r\n__________\r\n");
                bw.write(o.pr[i].toString());
            }
            bw.write("\r\n__________________________________\r\n");
            bw.write("=================================================");
            bw.close();
            fw.close();
            
        } catch (Exception e) {
            System.out.println("Wrong!");
        }

    }
    public void fileReading(){
        try {
            FileReader fr = new FileReader("Order.txt");
            BufferedReader br = new BufferedReader(fr);
            String s;
            while((s= br.readLine()) !=null){
                System.out.println(s);
            }
                
            br.close();
            fr.close();
            
        } catch (Exception e) {
            System.out.println("false");
        }

    }

   
}

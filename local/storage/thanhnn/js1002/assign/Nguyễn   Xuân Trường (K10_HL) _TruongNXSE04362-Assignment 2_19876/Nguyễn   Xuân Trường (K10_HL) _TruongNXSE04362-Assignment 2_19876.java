/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author TDTP
 */
public class Laptop extends Product {

    private float screenSize;
    private float Depth;
    private int hddCapacity;

//    public Laptop(String name, float weight, float width, float height, float price,
//            float screenSize, float Depth, int hddCapacity) {
//        super(name, weight, width, height, price);
//        this.screenSize = screenSize;
//        this.Depth = Depth;
//        this.hddCapacity = hddCapacity;
//    }
    public float getScreenSize() {
        return screenSize;
    }

    public void setScreenSize(float screenSize) {
        this.screenSize = screenSize;
    }

    public float getDepth() {
        return Depth;
    }

    public void setDepth(float Depth) {
        this.Depth = Depth;
    }

    public int getHddCapacity() {
        return hddCapacity;
    }

    public void setHddCapacity(int hddCapacity) {
        this.hddCapacity = hddCapacity;
    }
//    @Override
//    public void display(){
//        super.display();
//        System.out.println("Screen size: " + screenSize +" inches");
//        System.out.println("Depth: "+Depth + " inches");
//        System.out.println("HDD: "+ hddCapacity + " inches");
//    }

    @Override
    public String toString() {
        return super.toString() + "\n" + "Screen size: " + screenSize + " inches"
                + "\n" + "Depth: " + Depth + " inches" + "\n" + "HDD: " + hddCapacity + " GB.";
    }

}

import java.io.File;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.ObjectOutputStream;
import java.io.PrintWriter;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author TDTP
 */
public class Main {

    public static void main(String[] args) {
        int select = 1;
        int i;
        int checkkieu = 0;
        int countmobile = 0;
        int countlaptop = 0;
        int counttablet = 0;
        Order order = new Order();
        MobilePhone mobile = new MobilePhone();
        Laptop laptop = new Laptop();
        Tablet tablet = new Tablet();
        while (select == 1 || select == 2 || select == 3 || select == 4 || select == 5 || select == 6 || select == 7) {
            System.out.println("Shop Management");
            System.out.println("==============================================");
            System.out.println("1. Create an Order");
            System.out.println("2. List all Order");
            System.out.println("3. Sort the List by the Name of the product in dictionary order");
            System.out.println("4. Sort the List by the Price of the product in descending order");
            System.out.println("5. Sort the List by the Weight of the product in ascending order");
            System.out.println("6. Save the List to a file");
            System.out.println("7. Load the List from a file");
            System.out.println("8. Exit");
            System.out.println("==============================================");
            System.out.print("Your Option: ");
            Scanner choice = new Scanner(System.in);
            select = Integer.parseInt(choice.nextLine());
            switch (select) {
                case 1:

                    String name = new String();
                    String id = new String();
                    String yesno = new String();
                    Scanner sc = new Scanner(System.in);
                    System.out.println("=====================================================");
                    System.out.println("Please provide us your information!");
                    System.out.print("Customer name: ");
                    name = sc.nextLine();
                    order.setName(name);
                    System.out.print("Customer ID No: ");
                    id = sc.nextLine();
                    order.setIdNumber(id);
                    System.out.print("How many product do you want to order: ");
                    int productQuantity;
                    productQuantity = sc.nextInt();
                    int solan = 0;
                    while (solan < productQuantity) {
                        System.out.print("What kind of product(MobilePhone = M, Laptop = L, Tablet = T) ");
                        char wk;
                        Scanner t = new Scanner(System.in);
                        wk = t.nextLine().charAt(0);
                        wk = Character.toUpperCase(wk);
                        if (wk == 'M') {
                            OrderLine odl = new OrderLine(mobile, 1);
                            order.addOrderLine(odl);
                            Scanner a = new Scanner(System.in);
                            System.out.println("Please give me your mobile phone features:");
                            System.out.print("Name: ");
                            name = a.nextLine();
                            mobile.setName(name);
                            System.out.print("Price: ");
                            float price = a.nextFloat();
                            mobile.setPrice(price);
                            System.out.print("Weight: ");
                            float weight = a.nextFloat();
                            mobile.setWeight(weight);
                            System.out.print("Height: ");
                            float height = a.nextFloat();
                            mobile.setHeight(height);
                            System.out.print("Width: ");
                            float width = a.nextFloat();
                            mobile.setWidth(width);
                            System.out.print("Thickness: ");
                            float ThickNess = a.nextFloat();
                            mobile.setThickNess(ThickNess);
                            System.out.print("Multitouch: ");
                            boolean multiTouch = a.nextBoolean();
                            mobile.setMultiTouch(multiTouch);
                            System.out.print("Loudspeaker: ");
                            boolean loudSpeaker = a.nextBoolean();
                            mobile.setLoudSpeaker(loudSpeaker);
                            System.out.print("Screen size: ");
                            float screenSize = a.nextFloat();
                            mobile.setScreenSize(screenSize);
                            solan++;

                        }

                        if (wk == 'L') {
                            OrderLine odl = new OrderLine(laptop, 1);
                            order.addOrderLine(odl);
                            Scanner a = new Scanner(System.in);
                            System.out.println("Please give me your laptop features:");
                            System.out.print("Name: ");
                            name = a.nextLine();
                            laptop.setName(name);
                            System.out.print("Price: ");
                            float price = a.nextFloat();
                            laptop.setPrice(price);
                            System.out.print("Weight: ");
                            float weight = a.nextFloat();
                            laptop.setWeight(weight);
                            System.out.print("Height: ");
                            float height = a.nextFloat();
                            laptop.setHeight(height);
                            System.out.print("Width: ");
                            float width = a.nextFloat();
                            laptop.setWidth(width);
                            System.out.print("Depth: ");
                            float Depth = a.nextFloat();
                            laptop.setDepth(Depth);
                            System.out.print("Screen size: ");
                            float screenSize = a.nextFloat();
                            laptop.setScreenSize(screenSize);
                            System.out.print("HDD : ");
                            int hddCapacity = a.nextInt();
                            laptop.setHddCapacity(hddCapacity);
                            solan++;

                        }

                        if (wk == 'T') {

                            OrderLine odl = new OrderLine(tablet, 1);
                            order.addOrderLine(odl);
                            boolean threeG;
                            Scanner a = new Scanner(System.in);
                            System.out.println("Please give me your tablet features:");
                            System.out.print("Name: ");
                            name = a.nextLine();
                            tablet.setName(name);
                            System.out.print("Price: ");
                            float price = a.nextFloat();
                            tablet.setPrice(price);
                            System.out.print("Weight: ");
                            float weight = a.nextFloat();
                            tablet.setWeight(weight);
                            System.out.print("Height: ");
                            float height = a.nextFloat();
                            tablet.setHeight(height);
                            System.out.print("Width: ");
                            float width = a.nextFloat();
                            tablet.setWidth(width);
                            System.out.print("Thickness: ");
                            float thick = a.nextFloat();
                            tablet.setThick(thick);
                            System.out.print("Memory size: ");
                            float memorySize = a.nextFloat();
                            tablet.setMemorySize(memorySize);
                            checkkieu = 1;
                            while (checkkieu != 0) {
                                System.out.print("3G( Yes or No only): ");
                                Scanner yn = new Scanner(System.in);
                                yesno = yn.nextLine();
                                yesno = yesno.toUpperCase();
                                if (yesno.equals("NO")) {
                                    threeG = false;
                                    checkkieu = 0;
                                } else if (yesno.equals("YES")) {
                                    threeG = true;
                                    checkkieu = 0;
                                } else {
                                    checkkieu = 1;
                                    threeG = false;
                                    System.out.println("Wrong type 3G input !! input YES or NO only ");
                                }
                                tablet.setThreeG(threeG);

                            }
                            solan++;

                        }

                        System.out.println("");

                    }
//                    order.print();
                    break;
                case 2:
                    order.print();
                    break;
                case 3:
                    order.sortByName();
                    order.print();
                    break;
                case 4:
                    order.sortByPrice();
                    order.print();
                    break;
                case 5:
                    order.sortByWeight();
                    order.print();
                    break;
                case 6:
                    order.WtF();
                    break;
                case 7:
                    break;
                case 8:
                    System.out.println("Bye bitch!!");
                    break;

            }
            System.out.println("------------------");
            System.out.println("=========================================================");
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
 * @author TDTP
 */
public class MobilePhone extends Product {

    private boolean multiTouch;
    private boolean loudSpeaker;
    private float ThickNess;
    private float screenSize;
//    public MobilePhone(String name, float weight, float width, float height, float price,
//            boolean multiTouch, boolean loudSpeaker, float ThickNess, float screenSize) {
//        //super(name, weight, width, height, price);
//    }



//    public MobilePhone(String name, float weight, float width, float height, float price,
//            boolean multiTouch, boolean loudSpeaker, float ThickNess, float screenSize) {
//        super();
//        this.multiTouch = multiTouch;
//        this.loudSpeaker = loudSpeaker;
//        this.ThickNess = ThickNess;
//        this.screenSize = screenSize;
//    }
    public boolean isMultiTouch() {
        return multiTouch;
    }

    public void setMultiTouch(boolean multiTouch) {
        this.multiTouch = multiTouch;
    }

    public boolean isLoudSpeaker() {
        return loudSpeaker;
    }

    public void setLoudSpeaker(boolean loudSpeaker) {
        this.loudSpeaker = loudSpeaker;
    }

    public float getThickNess() {
        return ThickNess;
    }

    public void setThickNess(float ThickNess) {
        this.ThickNess = ThickNess;
    }

    public float getScreenSize() {
        return screenSize;
    }

    public void setScreenSize(float screenSize) {
        this.screenSize = screenSize;
    }

//    @Override
//    public void display() {
//        super.display();
//        System.out.println("Thickness: " + ThickNess +" inches");
//        System.out.println("Multitouch: " + multiTouch +" inches");
//        System.out.println("Loudspeaker: " + loudSpeaker +" inches");
//        System.out.println("Screen size: " + screenSize +" inches");
//
//    }
    @Override
    public String toString() {
        return super.toString() + "\n" + "Thickness: " + ThickNess + " inches "+ "\n"
                + "Multitouch: " + multiTouch + "\n" + "Loudspeaker: " + loudSpeaker + "\n"
                + "Screen size: " + screenSize + " inches";
    }
}

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.nio.charset.Charset;
import java.nio.file.Files;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;
import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author TDTP
 */
public class Order {

    private String name;
    private String idNumber;
    private List<OrderLine> colItem;

    public Order() {
        name = "";
        idNumber = "";
        colItem = new ArrayList<>();
    }

    public void addOrderLine(OrderLine odl) {

        if (odl != null && colItem != null) {
            colItem.add(odl);
        }
    }

    public void print() {
        System.out.println("Customer name : " + this.name);
        System.out.println("Customer ID no: " + this.idNumber);
        colItem.stream().forEach((xline) -> {
            System.out.println(xline);
        });

    }

    public void sortByName() {

        Collections.sort(colItem, new Comparator<OrderLine>() {

            @Override
            public int compare(OrderLine t, OrderLine t1) {
                return t.getTheProduct().name.compareToIgnoreCase(t1.getTheProduct().name);
            }

        });
        System.out.println("After sort by NAME: ");

    }

    public void sortByPrice() {
        Collections.sort(colItem, new Comparator<OrderLine>() {
            @Override
            public int compare(OrderLine t, OrderLine t1) {
                return Float.compare(t1.getTheProduct().price, t.getTheProduct().price);
            }
        });
        System.out.println("After sort by PRICE: ");

    }

    public void sortByWeight() {
        Collections.sort(colItem, new Comparator<OrderLine>() {
            @Override
            public int compare(OrderLine a, OrderLine a1) {
                return Float.compare(a.getTheProduct().weight, a1.getTheProduct().weight);
            }
        });
        System.out.println("After sort by Weight: ");
    }

    public void WtF() {
        try {
            Scanner t = new Scanner(System.in);
            System.out.println("Output file name: ");
            String file = t.nextLine();
            File f1 = new File(file);
            FileWriter fw = new FileWriter(f1);
            PrintWriter pw = new PrintWriter(fw);
            pw.println(colItem);
            pw.close();
        } catch (IOException ex) {
            System.out.println("Cant Write");
        }
    }

    public void RfF() {

    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getIdNumber() {
        return idNumber;
    }

    public void setIdNumber(String idNumber) {
        this.idNumber = idNumber;
    }

//    public void display() {
//        System.out.println("Customer name: " + name);
//        System.out.println("Customer ID: " + idNumber);
//    }
}

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 *
 * @author TDTP
 */
public class OrderLine {

    public Product getTheProduct() {
        return theProduct;
    }

    public void setTheProduct(Product theProduct) {
        this.theProduct = theProduct;
    }

    private int quantity;
    private Product theProduct;

    public OrderLine(Product thePro, int quan) {
        this.quantity = quan;
        this.theProduct = thePro;
    }

    @Override
    public String toString() {
        return theProduct.toString();
    }

}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author TDTP
 */
public class Product {

    public String name;
    public float weight;
    public float width;
    public float height;
    public float price;
//
//    public Product(String name, float weight, float width, float height, float price) {
//        this.name = name;
//        this.weight = weight;
//        this.width = width;
//        this.height = height;
//        this.price = price;
//    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
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

    public float getHeight() {
        return height;
    }

    public void setHeight(float height) {
        this.height = height;
    }

    public float getPrice() {
        return price;
    }

    public void setPrice(float price) {
        this.price = price;
    }

//    public void display() {
//        System.out.println("Name: " + name);
//        System.out.println("Price: " + price + " $");
//        System.out.println("Weight: " + weight + " g");
//        System.out.println("Height: " + height +" inches");
//        System.out.println("Width:" + width +" inches");
//    }
    public String toString() {
        return "\n" + "-------------------" + "\n" + "Name: " + name + "\n" + "Price: $ " + price + "\n"
                + "Weight: " + weight + " g." + "\n" + "Height: "
                + height + " inches" + "\n" + "Width: " + width + " inches";
    }
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author TDTP
 */
public class Tablet extends Product {

//    public Tablet(String name, float weight, float width, float height,
//            float price, boolean threeG, float memorySize, float thick) {
//        super(name, weight, width, height, price);
//        this.threeG = threeG;
//        this.memorySize = memorySize;
//        this.thick = thick;
//    }
    public boolean isThreeG() {
        return threeG;
    }

    public void setThreeG(boolean threeG) {
        this.threeG = threeG;
    }

    public float getMemorySize() {
        return memorySize;
    }

    public void setMemorySize(float memorySize) {
        this.memorySize = memorySize;
    }

    public float getThick() {
        return thick;
    }

    public void setThick(float thick) {
        this.thick = thick;
    }

    private boolean threeG;
    private float memorySize;
    private float thick;

//    @Override
//    public void display() {
//        super.display();
//        System.out.println("Memory Size: " + memorySize + " GB");
//        if (threeG == true) {
//            System.out.println("3G: Yes");
//        } else {
//            System.out.println("3G: No");
//        }
//
//    }
    @Override
    public String toString() {
        if (threeG == true) {
            return super.toString() + "\n" + "Memory Size: " + memorySize + " GB." + "\n"
                    + "3G: Yes";
        } else {
            return super.toString() + "\n" + "Memory Size: " + memorySize + " GB." + "\n"
                    + "3G: No";
        }
    }
}

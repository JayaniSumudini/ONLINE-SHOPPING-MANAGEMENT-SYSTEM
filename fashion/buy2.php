����   4 @
  0
 
 1	 
 2	 
 3	 
 4	 
 5 6
  0
 7 8 9 : ; pageData [B start I end position <init> ()V Code LineNumberTable LocalVariableTable this 5Lorg/apache/derby/iapi/services/io/ArrayOutputStream; ([B)V data setData StackMapTable write (I)V b 
Exceptions < ([BII)V off len getPosition ()I setPosition newPosition setLimit length 
clearLimit 	unwritten 
SourceFile ArrayOutputStream.java             java/io/EOFException = > ? 3org/apache/derby/iapi/services/io/ArrayOutputStream java/io/OutputStream 'org/apache/derby/iapi/services/io/Limit java/io/IOException java/lang/System 	arraycopy *(Ljava/lang/Object;ILjava/lang/Object;II)V ! 
                         	        3     *� �       
    %  &                    F     
*� *+� �           )  * 	 +        
       
           x     "*+� *� +� *+�� � *� *� �           .  / 
 0  1  3  4 ! 6        "       "                o     &*� *� � � Y� �*� *Y� Z`� �T�           =  >  @ % B        &       &          !     "   #     �     .*� `*� � � Y� �+*� *� � 	*Y� `� �           F  G  I # J - K    *    .       .       . $     . %        !     "  & '     /     *� �           R              (      h     *� � *
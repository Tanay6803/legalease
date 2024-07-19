<?php
                        $lawyeremail=$_SESSION['email'];
                        $sql="SELECT * FROM `booking_table` WHERE `lawyeremail`='$lawyeremail'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)
                        {
                            $num=1;
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $clientemail=$row['useremail'];
                                $sql="SELECT * FROM `client` WHERE `email`='$clientemail'";
                                $result="mysqli_query($conn,$sql)";
                                $row2=mysqli_fetch_assoc($result);
                                echo "<tr>
                                    <th scope='row'>$num</th>
                                    <td>".$row2['fname']." ".$row2['lname']."</td>
                                    <td>".$row['dateofmeeting']."</td>";
                                    if($row['Status']=='Pending')
                                    {
                                        echo "<td><span class='badge badge-warning'>Pending</span></td>
                                        <td>
                                        <td>
                            <button class='btn btn-sm btn-success'>Accept</button>
                            <button class='btn btn-sm btn-danger'>Decline</button>
                        </td>";
                                    }
                                    elseif($row['Status']=='Accept')
                                    {
                                        echo "<td><span class='badge badge-success'>Accepted</span></td>
                                        <td>
                                        <button class='btn btn-sm btn-danger'>Decline</button>
                                    </td>
                                </tr>";
                                    }
                                    else{
                                        echo "<td><span class='badge badge-danger'>Declined</span></td>";
                                    }
                                    echo "<td>
                                        <button class='btn btn-sm btn-danger'>Decline</button>
                                        <td>
                                        <button class='btn btn-sm btn-danger' disabled>Decline</button>
                                    </td>
                                    </td>
                                </tr>";
                                $num+=1;
                            }
                        }
                    ?>